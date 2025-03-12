<?php

namespace App\Filament\Resources\ApresiasiMahasiswaResource\Pages;

use App\Filament\Resources\ApresiasiMahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApresiasiMahasiswas extends ListRecords
{
    protected static string $resource = ApresiasiMahasiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
