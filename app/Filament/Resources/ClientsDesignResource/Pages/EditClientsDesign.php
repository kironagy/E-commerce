<?php

namespace App\Filament\Resources\ClientsDesignResource\Pages;

use App\Filament\Resources\ClientsDesignResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClientsDesign extends EditRecord
{
    protected static string $resource = ClientsDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
