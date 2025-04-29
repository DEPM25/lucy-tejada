<?php

namespace App\Filament\Resources\InscripcioneResource\Pages;

use App\Filament\Resources\InscripcioneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInscripcione extends EditRecord
{
    protected static string $resource = InscripcioneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
