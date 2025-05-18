<?php

namespace App\Filament\Resources\BusinessSetupResource\Pages;

use App\Filament\Resources\BusinessSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBusinessSetup extends ViewRecord
{
    protected static string $resource = BusinessSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
