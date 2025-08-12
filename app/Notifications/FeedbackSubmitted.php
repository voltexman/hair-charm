<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class FeedbackSubmitted extends Notification
{
    use Queueable;

    public object $feedback;

    public function __construct(object $feedback)
    {
        $this->feedback = $feedback;
    }

    public function via(): array
    {
        return ['mail', 'telegram'];
    }

    public function toMail(): MailMessage
    {
        return (new MailMessage)
            ->greeting('Зворотній зв`язок')
            ->subject(env('APP_NAME').' - Зворотній зв`язок')
            ->lineIf($this->feedback->name, "**Ім`я:** {$this->feedback->name}")
            ->lineIf($this->feedback->contact, "**Контакт:** {$this->feedback->contact}")
            ->line("**Повідомлення:** {$this->feedback->message}")
            ->salutation('');
    }

    public function toTelegram(): TelegramMessage
    {
        return TelegramMessage::create()
            ->line('*Сайт: *'.env('APP_NAME'))
            ->line('*Зворотній зв`язок*')
            ->lineIf((bool) $this->feedback->name, "*Ім`я:* {$this->feedback->name}")
            ->lineIf((bool) $this->feedback->contact, "*Контакт:* {$this->feedback->contact}")
            ->line("*Повідомлення:* {$this->feedback->message}");
    }
}
