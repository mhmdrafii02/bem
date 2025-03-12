<?php

namespace App\Filament\Resources\TerkaitResource\Pages;

use App\Filament\Resources\TerkaitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTerkait extends EditRecord
{
    protected static string $resource = TerkaitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
