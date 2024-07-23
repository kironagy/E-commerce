<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?string $navigationGroup = 'Products Area';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('city')
                    ->disabled()
                    ->required(),
                Forms\Components\TextInput::make('adderss')
                    ->disabled()
                    ->required(),
                Forms\Components\TextInput::make('notes')
                    ->disabled()
                    ->required(),
                Forms\Components\TextInput::make('item_price')
                    ->disabled()
                    ->required(),
                Forms\Components\Select::make('basket_orderstatus')
                    ->label('Status')
                    ->required()
                    ->options([
                        'Pending'=> 'Pending',
                        'under_shipping'=> 'Under Shipping',
                        'work at order' => 'work at order',
                        'delivered' => 'Delivered',
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('adderss')
                ->label('Address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('basket_orderstatus')
                ->label('Status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
                     ->where('city', '!=', null)
                     ->where('adderss', '!=', null)
                     ->where('notes', '!=', null)
                     ->where('item_price', '!=', null)
                     ->where('basket_orderstatus', '!=', null);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
        ];
    }
}
