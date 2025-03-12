<?php

namespace App\Filament\Resources\DocumentasiResource\Pages;

use App\Filament\Resources\DocumentasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocumentasi extends EditRecord
{
    protected static string $resource = DocumentasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
