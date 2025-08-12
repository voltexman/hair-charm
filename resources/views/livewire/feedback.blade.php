<?php

use function Livewire\Volt\{state, rules};
use Illuminate\Support\Facades\Notification;
use App\Notifications\FeedbackSubmitted;
use App\Models\Feedback;

state(['name', 'contact', 'message']);

rules([
    'name' => 'nullable|min:2|max:20',
    'contact' => 'nullable|min:5|max:120',
    'message' => 'required|string|min:5|max:1500',
])->messages([
    'name.min' => 'Name is too short',
    'contact.min' => 'Please provide more information',
    'message.required' => 'Enter your message',
]);

$submit = function () {
    $validated = $this->validate();

    Feedback::create($validated);

    Notification::routes([
        'mail' => env('ADMIN_EMAIL'),
        'telegram' => env('TELEGRAM_CHAT_ID'),
    ])->notify(new FeedbackSubmitted((object) $validated));

    session()->flash('feedback-success');
};

?>

<div>
    @session('feedback-success')
        <div class="flex justify-center items-center size-full">
            <div class="flex flex-col items-center size-full">
                <x-lucide-check-circle-2 class="size-25 stroke-charm-brown-600" stroke-width="1" />
                <div class="mt-5 font-[Boldonse] text-lg">Success</div>
                <div class="mt-2.5 font-[Oswald] text-gray-600 font-light tracking-wide text-center">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                </div>
            </div>
        </div>
    @else
        <form wire:submit.prevent="submit">
            <div class="flex flex-col">
                <x-form.label for="name" label="Your name" />
                <x-form.input type="text" wire:model="name" id="name" placeholder="What is your name" />
                @error('name')
                    <x-form.error>{{ $message }}</x-form.error>
                @enderror

                <x-form.label for="contact" label="Email or phone" class="mt-5" />
                <x-form.input type="text" wire:model="contact" id="contact" placeholder="example@gmail.com or phone" />
                @error('contact')
                    <x-form.error>{{ $message }}</x-form.error>
                @enderror

                <x-form.label for="message" label="Your message" class="mt-5" />
                <x-form.textarea wire:model="message" id="message" cols="30" rows="6"
                    placeholder="Enter your message" />
                @error('message')
                    <x-form.error>{{ $message }}</x-form.error>
                @enderror

                <x-form.button type="submit" wire:loading.attr="disabled" class="flex items-center me-auto mt-5">
                    <span wire:loading.remove class="font-medium">Send</span>
                    <span wire:loading class="font-medium">Sending...</span>
                    <x-lucide-send wire:loading.remove class="ms-1.5 size-4.5" />
                    <x-lucide-loader-2 wire:loading class="ms-1.5 size-4.5 animate-spin" />
                </x-form.button>
            </div>
        </form>
    @endsession
</div>
