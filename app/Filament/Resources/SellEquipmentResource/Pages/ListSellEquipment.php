<?php

namespace App\Filament\Resources\SellEquipmentResource\Pages;

use App\Filament\Resources\SellEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSellEquipment extends ListRecords
{
    protected static string $resource = SellEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
