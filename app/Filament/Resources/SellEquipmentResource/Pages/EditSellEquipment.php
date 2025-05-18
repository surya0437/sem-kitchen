<?php

namespace App\Filament\Resources\SellEquipmentResource\Pages;

use App\Filament\Resources\SellEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSellEquipment extends EditRecord
{
    protected static string $resource = SellEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
