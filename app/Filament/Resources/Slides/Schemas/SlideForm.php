<?php

namespace App\Filament\Resources\Slides\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SlideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SpatieMediaLibraryFileUpload::make('images')
                    ->collection('slides')
                    ->imageEditor()
                    ->label('Зображення')
                    ->reorderable()
                    ->disk('public')
                    ->visibility('public')
                    ->multiple()
                    ->required()
                    ->image()
                    ->minFiles(1)
                    ->maxFiles(20)
                    ->acceptedFileTypes([
                        'image/*',
                    ])
                    ->validationMessages([
                        'required' => 'Зображення обов`язкові',
                        'min' => 'Не має бути менше 1 зображення',
                        'max' => 'Може бути не більше 20 зображень',
                        'image' => 'Може бути тільки зображення',
                    ])
                    ->columnSpanFull(),

                Textarea::make('text')
                    ->label('Текст на слайді')
                    ->required()
                    ->rows(5)
                    ->extraAttributes(['class' => 'resize-none'])
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
