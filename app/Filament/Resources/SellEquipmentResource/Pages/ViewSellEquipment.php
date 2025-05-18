<?php

namespace App\Filament\Resources\SellEquipmentResource\Pages;

use App\Filament\Resources\SellEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSellEquipment extends ViewRecord
{
    protected static string $resource = SellEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
