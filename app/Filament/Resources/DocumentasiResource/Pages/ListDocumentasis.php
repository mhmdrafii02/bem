<?php

namespace App\Filament\Resources\DocumentasiResource\Pages;

use App\Filament\Resources\DocumentasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDocumentasis extends ListRecords
{
    protected static string $resource = DocumentasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
