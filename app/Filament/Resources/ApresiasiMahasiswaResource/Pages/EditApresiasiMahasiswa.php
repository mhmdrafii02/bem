<?php

namespace App\Filament\Resources\ApresiasiMahasiswaResource\Pages;

use App\Filament\Resources\ApresiasiMahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApresiasiMahasiswa extends EditRecord
{
    protected static string $resource = ApresiasiMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
