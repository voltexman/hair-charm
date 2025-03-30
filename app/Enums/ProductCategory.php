<?php

namespace App\Enums;

enum ProductCategory: string
{
    case VIRGIN_RUSSIAN_HAIR = 'virgin-russian-hair';
    case WHOLESALE = 'wholesale';
    case WEFTS = 'wefts';
    case TAPE_HAIR = 'tape-hair';
    case PRE_BONDED_HAIR = 'pre-bonded-hair';
    case CLIP_INS = 'clip-ins';
    case BLEACHED_RUSSIAN_HAIR = 'bleached-russian-hair';
    case SUPER_DOUBLE_DRAWN_RUSSIAN_HAIR = 'super-double-drawn-russian-hair';
    case GRAY_RUSSIAN_HAIR_WHOLESALE = 'gray-russian-hair-wholesale';
    case TRAINING = 'training';

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
