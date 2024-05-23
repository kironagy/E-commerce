<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?int $navigationSort = 5;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('item_cat')
                    ->required()
                    ->relationship('Category', 'categories_name')->columnSpanFull(),


                Forms\Components\Select::make('item_subcat')
                    ->required()
                    ->relationship('subCategory', 'subcategoriesName')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('subcategoriesName')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('subcategories_IdCat')
                            ->required()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('categories_name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('categories_name_ar')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\FileUpload::make('categories_img')
                                    ->image()
                                    ->required(),
                            ])
                            ->relationship('category', 'categories_name')
                    ])
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('cover')
                    ->required()
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->imageEditor()
                    ->columnSpanFull()
                    ->minFiles(2)
                    ->maxFiles(2),

                Forms\Components\FileUpload::make('item_img')
                    ->required()
                    ->image()
                    ->columnSpanFull()
                    ->multiple()
                    ->imageEditor(),
                Forms\Components\TextInput::make('item_name')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\Textarea::make('item_desc')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('details')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('from_shipping_days')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                Forms\Components\TextInput::make('to_shipping_days')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                Forms\Components\TextInput::make('shippingPrice')
                    ->required()
                    ->prefix('L.E')
                    ->numeric(),
                Forms\Components\TextInput::make('item_price')
                    ->required()
                    ->numeric()
                    ->columnSpanFull()
                    ->prefix('L.E'),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('item_name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('cover')
                    ->searchable(),
                Tables\Columns\TextColumn::make('shippingPrice')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('item_price')
                    ->money()
                    ->sortable(),

                Tables\Columns\TextColumn::make('from_shipping_days')
                    ->sortable(),

                Tables\Columns\TextColumn::make('to_shipping_days')
                    ->sortable()


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
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
