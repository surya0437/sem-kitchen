<?php

namespace App\Filament\Resources\BusinessSetupResource\Pages;

use App\Filament\Resources\BusinessSetupResource;
use App\Models\BusinessSetup;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBusinessSetups extends ListRecords
{
    protected static string $resource = BusinessSetupResource::class;

    protected function getHeaderActions(): array
    {
        if (BusinessSetup::count() > 0) {
            return [];
        }
        return [
            Actions\CreateAction::make()
            ->label('Create Business Details')
            ->icon('heroicon-o-plus-circle'),
        ];
    }
}
