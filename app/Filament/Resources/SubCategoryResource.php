<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubCategoryResource\Pages;
use App\Filament\Resources\SubCategoryResource\RelationManagers;
use App\Models\Category;
use App\Models\SubCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubCategoryResource extends Resource
{
    protected static ?string $model = SubCategory::class;
    protected static ?string $navigationGroup = 'Products Area';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';
    protected static ?int $navigationSort = 8;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                    ->relationship('category', 'categories_name'),


                Forms\Components\TextInput::make('subcategoriesName')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('subcategories_IdCat')->getStateUsing(fn ($record) => Category::find($record->subcategories_IdCat)->categories_name)->label('name'),
                Tables\Columns\TextColumn::make('subcategoriesName')->label('sub name'),

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
            'index' => Pages\ListSubCategories::route('/'),
            'create' => Pages\CreateSubCategory::route('/create'),
            'edit' => Pages\EditSubCategory::route('/{record}/edit'),
        ];
    }
}
