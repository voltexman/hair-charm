<?php

namespace App\Filament\Resources\Slides\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class SlidesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->defaultSort('id', 'desc')
            ->columns([
                SpatieMediaLibraryImageColumn::make('images')
                    ->collection('slides')
                    ->conversion('preview')
                    ->square()
                    ->limit(1)
                    ->circular()
                    ->width('1%')
                    ->label(false),

                TextColumn::make('text')
                    ->label('Текст')
                    ->wrap(),

                ToggleColumn::make('is_active')
                    ->label(false)
                    ->alignCenter(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->slideOver()
                    ->modalWidth('md')
                    ->closeModalByClickingAway(false)
                    ->modalHeading(fn () => 'Редагування слайду'),

                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
