<?php

namespace App\Filament\Resources\SeoContentResource\Pages;

use App\Filament\Resources\SeoContentResource;
use App\Models\SeoContent;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeoContents extends ListRecords
{
    protected static string $resource = SeoContentResource::class;

    protected function getHeaderActions(): array
    {
        if (SeoContent::count() > 0) {
            return [];
        }
        return [
            Actions\CreateAction::make()
                ->label('Create SEO Content')
                ->icon('heroicon-o-plus-circle')
        ];
    }
}
