<?php

namespace App\Enums;

enum FeedbackStatus: string
{
    case NEW = 'new';
    case VIEWED = 'viewed';

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
