<?php

namespace App\Filament\Resources\SeoContentResource\Pages;

use App\Filament\Resources\SeoContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSeoContent extends ViewRecord
{
    protected static string $resource = SeoContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
