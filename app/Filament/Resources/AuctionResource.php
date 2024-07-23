<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AuctionResource\Pages;
use App\Filament\Resources\AuctionResource\RelationManagers;
use App\Models\Auction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AuctionResource extends Resource
{
    protected static ?string $model = Auction::class;
    protected static ?string $navigationGroup = 'Products Area';

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('startPrice')->label('started_bid')
                    ->required()
                    ->prefix('L.E')
                    ->numeric(),

                // Forms\Components\TextInput::make('endPrice')->label('highest_bid')
                //     ->required()
                //     ->prefix('L.E')
                //     ->numeric(),

                Forms\Components\TextInput::make('Barnd')->label('brand')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('sience')->label('sience')
                    ->format('Y')
                    ->required(),
                Forms\Components\TextInput::make('country')->label('country')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('owned')->label('owned')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('img')->label('image')
                    ->image()
                    ->columnSpanFull()
                    ->required(),

                Forms\Components\DateTimePicker::make('TimeEnd')->label('date_of_end')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('startPrice')->label('started_bid')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('endPrice')->label('highest_bid')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Barnd')->label('brand')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sience')->label('since')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('country')->label('country')
                    ->searchable(),
                Tables\Columns\TextColumn::make('owned')->label('owned')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('img')->label('image'),
                Tables\Columns\TextColumn::make('TimeEnd')->label('date_of_end')
                    ->date()
                    ->sortable(),





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
            'index' => Pages\ListAuctions::route('/'),
            'create' => Pages\CreateAuction::route('/create'),
            'edit' => Pages\EditAuction::route('/{record}/edit'),
        ];
    }
}
