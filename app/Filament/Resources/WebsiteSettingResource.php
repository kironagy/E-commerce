<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebsiteSettingResource\Pages;
use App\Filament\Resources\WebsiteSettingResource\RelationManagers;
use App\Models\WebsiteSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WebsiteSettingResource extends Resource
{
    protected static ?string $model = WebsiteSetting::class;

    protected static ?string $navigationGroup = 'Websites';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('facebook')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('twitter')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('instagram')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('paner_one')
                    ->required()
                    ->image()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('paner_two')
                    ->required()
                    ->image(    )
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListWebsiteSettings::route('/'),
            'create' => Pages\CreateWebsiteSetting::route('/create'),
            'edit' => Pages\EditWebsiteSetting::route('/{record}/edit'),
        ];
    }
}
