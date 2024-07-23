<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientsDesignResource\Pages;
use App\Models\ClientsDesign;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class ClientsDesignResource extends Resource
{
    protected static ?string $model = ClientsDesign::class;

    protected static ?string $navigationIcon = 'heroicon-o-beaker';
    protected static ?string $navigationGroup = 'Design Area';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Select::make('user_id')
                //     ->relationship('user', 'name')
                //     ->required(),
                // Forms\Components\Textarea::make('image')
                //     ->required()
                //     ->columnSpanFull(),

                FileUpload::make('image'),

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

                ImageColumn::make('image')->label('Image'),
                // Other columns...

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
