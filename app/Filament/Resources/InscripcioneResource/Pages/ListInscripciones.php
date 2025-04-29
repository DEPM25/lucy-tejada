<?php

namespace App\Filament\Resources\InscripcioneResource\Pages;

use App\Filament\Resources\InscripcioneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInscripciones extends ListRecords
{
    protected static string $resource = InscripcioneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
