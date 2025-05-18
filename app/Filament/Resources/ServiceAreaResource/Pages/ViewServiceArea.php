<?php

namespace App\Filament\Resources\ServiceAreaResource\Pages;

use App\Filament\Resources\ServiceAreaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewServiceArea extends ViewRecord
{
    protected static string $resource = ServiceAreaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
