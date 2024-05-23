<?php

namespace App\Filament\Resources\ClientsDesignResource\Pages;

use App\Filament\Resources\ClientsDesignResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientsDesigns extends ListRecords
{
    protected static string $resource = ClientsDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
