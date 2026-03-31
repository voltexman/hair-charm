<?php

namespace App\Filament\Resources\Photos\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Resources\Pages\CreateRecord;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PhotoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SpatieMediaLibraryFileUpload::make('images')
                    ->collection('photos')
                    ->imageEditor()
                    ->label('Зображення')
                    ->reorderable()
                    ->disk('public')
                    ->visibility('public')
                    ->required()
                    ->image()
                    ->acceptedFileTypes([
                        'image/*',
                    ])
                    ->validationMessages([
                        'required' => 'Зображення обов`язкові',
                        'image' => 'Може бути тільки зображення',
                    ])
                    ->columnSpanFull(),

                TextInput::make('title')
                    ->label('Назва або заголовок')
                    ->nullable()
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Опис зображення')
                    ->rows(5)
                    ->extraAttributes(['class' => 'resize-none'])
                    ->nullable()
                    ->columnSpanFull(),

                ToggleButtons::make('is_active')
                    ->hiddenLabel()
                    ->inline()
                    ->options([
                        1 => 'Відображати',
                        0 => 'Не відображати',
                    ])
                    ->default(1)
                    ->columnSpanFull(),

                Section::make('SEO налаштування')
                    ->description('Додаткові відомості про зображення.')
                    ->schema([
                        TextInput::make('meta_alt')
                            ->label('Атрибут alt')
                            ->nullable()
                            ->columnSpanFull(),

                        Textarea::make('meta_title')
                            ->label('Атрибут title')
                            ->rows(3)
                            ->nullable()
                            ->columnSpanFull(),
                    ])
                    ->collapsible()
                    ->collapsed()
                    ->columnSpanFull(),
            ]);
    }
}
