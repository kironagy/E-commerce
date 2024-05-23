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



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('promoCode_id')
                    ->relationship('promoCode', 'code')
                    ->disabled(),
                Forms\Components\Select::make('product_id')
                    ->required()
                    ->disabled()
                    ->relationship('product', 'title'),
                Forms\Components\TextInput::make('total')
                    ->required()
                    ->disabled()
                    ->numeric(),
                Forms\Components\TextInput::make('full_name')
                    ->disabled()
                    ->required(),
                Forms\Components\TextInput::make('address')
                    ->disabled()
                    ->required(),
                Forms\Components\TextInput::make('notes')
                    ->disabled()
                    ->required(),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'pending'=> 'Pending',
                        'under_shipping'=> 'Under Shipping',
                        'delivered' => 'Delivered',
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('status')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
        ];
    }
}
