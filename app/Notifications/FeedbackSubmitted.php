<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FeedbackSubmitted extends Notification
{
    use Queueable;

    public $feedback;

    public function __construct(object $feedback)
    {
        $this->feedback = $feedback;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting('Зворотній зв`язок')
            ->lineIf($this->feedback->name, 'Ім`я: '.$this->feedback->name)
            ->lineIf($this->feedback->contact, 'Контакт: '.$this->feedback->contact)
            ->line('Повідомлення: '.$this->feedback->message);
    }

    // public function toTelegram(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //         ->line('The introduction to the notification.')
    //         ->action('Notification Action', url('/'))
    //         ->line('Thank you for using our application!');
    // }
}
