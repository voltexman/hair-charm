<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ProductCategory: string implements HasLabel
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

    public function getLabel(): ?string
    {
        return match ($this) {
            self::VIRGIN_RUSSIAN_HAIR => 'Virgin Russian Hair',
            self::WHOLESALE => 'Wholesale',
            self::WEFTS => 'Wefts',
            self::TAPE_HAIR => 'Tape Hair',
            self::PRE_BONDED_HAIR => 'Pre Bonded Hair',
            self::CLIP_INS => 'Clip-ins',
            self::BLEACHED_RUSSIAN_HAIR => 'Bleached Russian Hair',
            self::SUPER_DOUBLE_DRAWN_RUSSIAN_HAIR => 'Super Double Drawn Russian Hair',
            self::GRAY_RUSSIAN_HAIR_WHOLESALE => 'Gray Russian Hair Wholesale',
            self::TRAINING => 'Training',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
