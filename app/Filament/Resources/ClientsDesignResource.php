<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientsDesignResource\Pages;
use App\Filament\Resources\ClientsDesignResource\RelationManagers;
use App\Models\ClientsDesign;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientsDesignResource extends Resource
{
    protected static ?string $model = ClientsDesign::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';
    protected static ?int $navigationSort = 4;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Textarea::make('image')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->getStateUsing(fn ($record) => $record->user_id)->numeric(),

                Tables\Columns\TextColumn::make('user_name')
                    ->getStateUsing(fn ($record) => User::find($record->user_id)->user_name),


                Tables\Columns\ImageColumn::make('img')
                ->label('svg'),
            ])
            ->recordAction(false)
            ->recordUrl(null)
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListClientsDesigns::route('/'),
            'create' => Pages\CreateClientsDesign::route('/create'),
            'edit' => Pages\EditClientsDesign::route('/{record}/edit'),
        ];
    }
}