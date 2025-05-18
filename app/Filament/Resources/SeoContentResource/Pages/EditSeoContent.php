<?php

namespace App\Filament\Resources\SeoContentResource\Pages;

use App\Filament\Resources\SeoContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeoContent extends EditRecord
{
    protected static string $resource = SeoContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
