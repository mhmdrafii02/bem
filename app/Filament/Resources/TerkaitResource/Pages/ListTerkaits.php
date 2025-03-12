<?php

namespace App\Filament\Resources\TerkaitResource\Pages;

use App\Filament\Resources\TerkaitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTerkaits extends ListRecords
{
    protected static string $resource = TerkaitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
