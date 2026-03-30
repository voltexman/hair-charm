<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ProductCategory: string implements HasLabel
{
    case VIRGIN_RUSSIAN_HAIR = 'virgin-russian-hair';
    case WEFTS = 'wefts';
    case TAPE_HAIR = 'tape-hair';
    case PRE_BONDED_HAIR = 'pre-bonded-hair';
    case CLIP_INS = 'clip-ins';
    case BLEACHED_RUSSIAN_HAIR = 'bleached-russian-hair';
    case SUPER_DOUBLE_DRAWN_RUSSIAN_HAIR = 'super-double-drawn-russian-hair';
    case GRAY_RUSSIAN_HAIR_WHOLESALE = 'gray-russian-hair-wholesale';
    case TRAINING = 'training';

    public function getLabel(): string
    {
        return match ($this) {
            self::VIRGIN_RUSSIAN_HAIR => 'Virgin Russian Hair',
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

    public function description(): string
    {
        return match ($this) {
            self::VIRGIN_RUSSIAN_HAIR => 'Premium untouched hair with natural texture and shine. Perfect for clients who want the most authentic, long-lasting extensions.',
            self::WEFTS => 'Professionally sewn hair wefts ready for various installation methods. Ideal for stylists who value flexibility and durability.',
            self::TAPE_HAIR => 'Lightweight tape-in extensions for fast, comfortable application. Blend seamlessly and are easy to maintain and reuse.',
            self::PRE_BONDED_HAIR => 'Keratin-tipped strands designed for precise, strand-by-strand installation. Offers secure attachment and a natural, flowing look.',
            self::CLIP_INS => 'Ready-to-wear clip-in extensions you can apply in minutes. Add instant length and volume without salon visits.',
            self::BLEACHED_RUSSIAN_HAIR => 'High-quality Russian hair expertly lightened while preserving strength. Perfect for blonde shades, toning, and custom coloring.',
            self::SUPER_DOUBLE_DRAWN_RUSSIAN_HAIR => 'Extra-thick from root to tip for maximum fullness. Ideal for luxurious, high-density hairstyles.',
            self::GRAY_RUSSIAN_HAIR_WHOLESALE => 'Naturally gray hair sourced for professional colorists and salons. Available in bulk for consistent supply and quality.',
            self::TRAINING => 'Professional education for stylists working with extensions. Learn techniques, tools, and best practices from experts.',
        };
    }

    public function link(): string
    {
        return match ($this) {
            self::VIRGIN_RUSSIAN_HAIR => 'products.virgin-slavic-hair',
            self::WEFTS => 'products.wefts',
            self::TAPE_HAIR => 'products.tape-hair',
            self::PRE_BONDED_HAIR => 'products.pre-bonded-hair',
            self::CLIP_INS => 'products.clip-ins',
            self::BLEACHED_RUSSIAN_HAIR => 'products.bleached-russian-hair',
            self::SUPER_DOUBLE_DRAWN_RUSSIAN_HAIR => 'products.super-double-drawn-russian-hair',
            self::GRAY_RUSSIAN_HAIR_WHOLESALE => 'products.gray-russian-hair-wholesale',
            self::TRAINING => 'products.training',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
