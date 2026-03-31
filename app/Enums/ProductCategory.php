<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ProductCategory: string implements HasLabel
{
    case VIRGIN_SLAVIC_HAIR = 'virgin-slavic-hair';
    case WEFTS = 'wefts';
    case TAPE_HAIR = 'tape-hair';
    case PRE_BONDED_HAIR = 'pre-bonded-hair';
    case CLIP_INS = 'clip-ins';
    case BLEACHED_SLAVIC_HAIR = 'bleached-slavic-hair';
    case SUPER_DOUBLE_DRAWN_SLAVIC_HAIR = 'super-double-drawn-slavic-hair';
    case GRAY_SLAVIC_HAIR_WHOLESALE = 'gray-slavic-hair-wholesale';
    case TRAINING = 'training';

    public function getLabel(): string
    {
        return match ($this) {
            self::VIRGIN_SLAVIC_HAIR => 'Virgin Slavic Hair',
            self::WEFTS => 'Wefts',
            self::TAPE_HAIR => 'Tape Hair',
            self::PRE_BONDED_HAIR => 'Pre Bonded Hair',
            self::CLIP_INS => 'Clip-ins',
            self::BLEACHED_SLAVIC_HAIR => 'Bleached Slavic Hair',
            self::SUPER_DOUBLE_DRAWN_SLAVIC_HAIR => 'Super Double Drawn Slavic Hair',
            self::GRAY_SLAVIC_HAIR_WHOLESALE => 'Gray Slavic Hair Wholesale',
            self::TRAINING => 'Training',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::VIRGIN_SLAVIC_HAIR => 'Premium untouched hair with natural texture and shine. Perfect for clients who want the most authentic, long-lasting extensions.',
            self::WEFTS => 'Professionally sewn hair wefts ready for various installation methods. Ideal for stylists who value flexibility and durability.',
            self::TAPE_HAIR => 'Lightweight tape-in extensions for fast, comfortable application. Blend seamlessly and are easy to maintain and reuse.',
            self::PRE_BONDED_HAIR => 'Keratin-tipped strands designed for precise, strand-by-strand installation. Offers secure attachment and a natural, flowing look.',
            self::CLIP_INS => 'Ready-to-wear clip-in extensions you can apply in minutes. Add instant length and volume without salon visits.',
            self::BLEACHED_SLAVIC_HAIR => 'High-quality Slavic hair expertly lightened while preserving strength. Perfect for blonde shades, toning, and custom coloring.',
            self::SUPER_DOUBLE_DRAWN_SLAVIC_HAIR => 'Extra-thick from root to tip for maximum fullness. Ideal for luxurious, high-density hairstyles.',
            self::GRAY_SLAVIC_HAIR_WHOLESALE => 'Naturally gray hair sourced for professional colorists and salons. Available in bulk for consistent supply and quality.',
            self::TRAINING => 'Professional education for stylists working with extensions. Learn techniques, tools, and best practices from experts.',
        };
    }

    public function link(): string
    {
        return match ($this) {
            self::VIRGIN_SLAVIC_HAIR => 'products.virgin-slavic-hair',
            self::WEFTS => 'products.wefts',
            self::TAPE_HAIR => 'products.tape-hair',
            self::PRE_BONDED_HAIR => 'products.pre-bonded-hair',
            self::CLIP_INS => 'products.clip-ins',
            self::BLEACHED_SLAVIC_HAIR => 'products.bleached-slavic-hair',
            self::SUPER_DOUBLE_DRAWN_SLAVIC_HAIR => 'products.super-double-drawn-slavic-hair',
            self::GRAY_SLAVIC_HAIR_WHOLESALE => 'products.gray-slavic-hair-wholesale',
            self::TRAINING => 'products.training',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
