<?php

namespace App\Filament\Resources\Pages\Tables;

use Filament\Actions\EditAction;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->searchable(false)
            ->paginated(false)
            ->columns([
                TextColumn::make('name')
                    ->weight(FontWeight::SemiBold)
                    ->label('Назва сторінки')
                    ->searchable(),

                IconColumn::make('robots')
                    ->options([
                        'heroicon-o-check-circle' => fn($state): bool => str_contains($state, 'index') && !str_contains($state, 'noindex') && !str_contains($state, 'nofollow'),
                        'heroicon-o-pause-circle' => fn($state): bool => str_contains($state, 'nofollow') && !str_contains($state, 'noindex'),
                        'heroicon-o-x-circle' => fn($state): bool => str_contains($state, 'noindex'),
                    ])
                    ->colors([
                        'success' => fn($state): bool => str_contains($state, 'index') && !str_contains($state, 'noindex') && !str_contains($state, 'nofollow'),
                        'warning' => fn($state): bool => str_contains($state, 'nofollow') && !str_contains($state, 'noindex'),
                        'danger' => fn($state): bool => str_contains($state, 'noindex'),
                    ]),
            ])
            ->recordActions([
                EditAction::make()
                    ->slideOver()
                    ->modalWidth('md')
                    ->modalHeading(fn($record) => "Редагування: {$record->name}"),
            ]);
    }
}
