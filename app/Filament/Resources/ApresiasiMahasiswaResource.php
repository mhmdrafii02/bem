<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApresiasiMahasiswaResource\Pages;
use App\Filament\Resources\ApresiasiMahasiswaResource\RelationManagers;
use App\Models\ApresiasiMahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApresiasiMahasiswaResource extends Resource
{
    protected static ?string $model = ApresiasiMahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                        ->label('Nama')
                        ->required(),
                Forms\Components\FileUpload::make('foto')
                        ->label('Foto')
                        ->required(),
                Forms\Components\TextInput::make('deskripsi')
                        ->label('Deskripsi')
                        ->required(),
                Forms\Components\TextInput::make('prestasi')
                        ->label('Prestasi')
                        ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prestasi')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApresiasiMahasiswas::route('/'),
            'create' => Pages\CreateApresiasiMahasiswa::route('/create'),
            'edit' => Pages\EditApresiasiMahasiswa::route('/{record}/edit'),
        ];
    }
}
