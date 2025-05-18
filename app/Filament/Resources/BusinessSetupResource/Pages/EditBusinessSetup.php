<?php

namespace App\Filament\Resources\BusinessSetupResource\Pages;

use App\Filament\Resources\BusinessSetupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBusinessSetup extends EditRecord
{
    protected static string $resource = BusinessSetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
