<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('title')
                    ->label('Заголовок')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->live(debounce: 300)
                    ->afterStateUpdated(function (Set $set, Get $get, ?string $state) {
                        if ($get('is_slug_locked') || blank($get('slug'))) {
                            $set('slug', Str::slug($state));
                        }
                    }),

                TextInput::make('slug')
                    ->label('Слаг (URL)')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->columnSpanFull()
                    ->disabled(fn (Get $get) => $get('is_slug_locked'))
                    ->dehydrated()
                    ->suffixAction(
                        Action::make('toggleSlugLock')
                            ->label(fn (Get $get) => $get('is_slug_locked') ? 'Розблокувати' : 'Заблокувати')
                            ->icon(fn (Get $get) => $get('is_slug_locked') ? 'heroicon-m-lock-open' : 'heroicon-m-lock-closed')
                            ->color(fn (Get $get) => $get('is_slug_locked') ? 'success' : 'danger')
                            ->action(function (Set $set, Get $get) {
                                $currentlyLocked = $get('is_slug_locked');
                                $set('is_slug_locked', ! $currentlyLocked);
                                if (! $currentlyLocked) {
                                    $set('slug', Str::slug($get('title') ?? ''));
                                }
                            })
                    ),

                TextInput::make('is_slug_locked')
                    ->default(true)
                    ->hidden()
                    ->dehydrated(false),

                SpatieMediaLibraryFileUpload::make('image')
                    ->label('Головне зображення')
                    ->collection('posts')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->imageEditor()
                    ->imagePreviewHeight('300')
                    ->columnSpanFull()
                    ->helperText('Рекомендований розмір: 1200×630 px (для соцмереж та блогу)')
                    ->maxSize(5120)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp']),

                RichEditor::make('content')
                    ->label('Контент статті')
                    ->required()
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'h2',
                        'h3',
                        'bulletList',
                        'orderedList',
                        'link',
                        'blockquote',
                        'codeBlock',
                        'undo',
                        'redo',
                    ]),

                Section::make('SEO — Мета-дані')
                    ->description('Інформація для пошукових систем та соціальних мереж')
                    ->collapsible()
                    ->collapsed(fn (string $operation) => $operation === 'create')
                    ->schema([
                        TextInput::make('meta_description')
                            ->label('Мета-опис')
                            ->maxLength(255)
                            ->helperText('120–160 символів. Буде показано в результатах пошуку.')
                            ->columnSpanFull(),

                        Select::make('robots')
                            ->label('Robots meta tag')
                            ->options([
                                'index,follow' => 'Index, Follow',
                                'noindex,follow' => 'Noindex, Follow',
                                'index,nofollow' => 'Index, Nofollow',
                                'noindex,nofollow' => 'Noindex, Nofollow',
                                'none' => 'None (noindex + nofollow)',
                            ])
                            ->default('index,follow')
                            ->helperText('Вказує пошуковим роботам, як обробляти цю сторінку')
                            ->native(false)
                            ->columnSpanFull(),
                    ]),

                Toggle::make('is_published')
                    ->label('Опубліковано')
                    ->default(false)
                    ->live()
                    ->columnSpan(1),
            ]);
    }
}
