<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('name')->disabled()->required()->label('Назва сторінки'),

                TextInput::make('meta_title')->label('Meta Title'),

                Textarea::make('meta_description')->rows(3)->label('Meta Description'),

                Select::make('robots')
                    ->options([
                        'index, follow' => 'index, follow',
                        'noindex, follow' => 'noindex, follow',
                        'index, nofollow' => 'index, nofollow',
                    ])
                    ->native(false)
                    ->selectablePlaceholder(false)
                    ->label('Robots'),
            ]);
    }
}
