<?php

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Notification;
use App\Notifications\FeedbackSubmitted;
use App\Models\Feedback;

new class extends Component {
    #[Validate('nullable|min:2|max:20'), messages(['min' => 'Name is too short'])]
    public $name;

    #[Validate('nullable|min:5|max:120'), messages(['min' => 'Please provide more information'])]
    public $contact;

    #[Validate('required|string|min:5|max:1500'), messages(['required' => 'Enter your message'])]
    public $message;

    public function submit()
    {
        $validated = $this->validate();

        Feedback::create($validated);

        Notification::route('mail', env('ADMIN_EMAIL'))->route('telegram', env('TELEGRAM_CHAT_ID'))->notify(new FeedbackSubmitted((object) $validated));

        $this->reset();
        session()->flash('feedback-success');
    }
};
?>

@session('feedback-success')
    <x-alert icon="check-circle">
        <x-slot:title>Has been submitted</x-slot>
        <x-slot:message>Your feedback has been submitted successfully.</x-slot>
    </x-alert>
@else
    <form wire:submit.prevent="submit">
        <div class="flex flex-col">
            <x-form.label for="name" label="Your name" />
            <x-form.input type="text" wire:model="name" id="name" icon="user" placeholder="What is your name" />
            @error('name')
                <x-form.error>{{ $message }}</x-form.error>
            @enderror

            <x-form.label for="contact" label="Your contact" class="mt-5" />
            <x-form.input type="text" wire:model="contact" icon="notebook-text" id="contact"
                placeholder="Email or phone" />
            @error('contact')
                <x-form.error>{{ $message }}</x-form.error>
            @enderror

            <x-form.label for="message" label="Your message" class="mt-5" />
            <x-form.textarea wire:model="message" id="message" cols="30" rows="6"
                placeholder="Enter your message" />
            @error('message')
                <x-form.error>{{ $message }}</x-form.error>
            @enderror

            <x-button type="submit" wire:loading.attr="disabled" class="flex rounded-full px-10 items-center me-auto mt-5">
                <span wire:loading.remove class="font-medium">Send</span>
                <span wire:loading class="font-medium">Sending...</span>
                <x-lucide-send wire:loading.remove class="ms-1.5 size-4.5" />
                <x-lucide-loader-2 wire:loading class="ms-1.5 size-4.5 animate-spin" />
            </x-button>
        </div>
    </form>
@endsession
