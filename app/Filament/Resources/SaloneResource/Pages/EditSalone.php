<?php

namespace App\Filament\Resources\SaloneResource\Pages;

use App\Filament\Resources\SaloneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSalone extends EditRecord
{
    protected static string $resource = SaloneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
