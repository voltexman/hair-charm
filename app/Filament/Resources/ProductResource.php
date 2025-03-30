<?php

namespace App\Filament\Resources;

use App\Enums\ProductCategory;
use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                SpatieMediaLibraryFileUpload::make('image')
                    ->imageEditor()
                    ->collection('product')
                    ->required()
                    ->label(false),

                TextInput::make('name')->required()->label('Назва товару'),

                Select::make('category')
                    ->options(ProductCategory::all())
                    ->native(false)
                    ->required()
                    ->label('Категорія'),

                Textarea::make('description')
                    ->autosize()
                    ->label('Короткий опис'),

                Repeater::make('options')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('color')->required()->label('Колір'),
                                TextInput::make('price')->numeric()->required()->label('Ціна'),
                                TextInput::make('weight')->numeric()->required()->label('Вага'),
                            ]),
                    ])
                    ->columnSpanFull()
                    ->collapsible()
                    ->cloneable()
                    ->label('Параметри'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')->collection('product')->label(false),

                TextColumn::make('name')->searchable()->label('Назва товару'),
                TextColumn::make('category')->sortable()->label('Категорія'),

                IconColumn::make('is_active')->boolean()->alignEnd()->sortable()->label('Статус'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            // 'create' => Pages\CreateProduct::route('/create'),
            // 'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
