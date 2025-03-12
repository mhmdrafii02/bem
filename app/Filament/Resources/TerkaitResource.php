<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TerkaitResource\Pages;
use App\Filament\Resources\TerkaitResource\RelationManagers;
use App\Models\Terkait;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TerkaitResource extends Resource
{
    protected static ?string $model = Terkait::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(225),
                Forms\Components\FileUpload::make('thumbnail')
                ->label('Masukin content')
                ->image()
                ->required(),
                Forms\Components\TextInput::make('link')
                ->label('masukin link')
                ->url()
                ->required(),
                Forms\Components\Textarea::make('isi')
                    ->label('Deskripsi isi')
                    ->required()
                    ->placeholder('Masukkan deskripsi isi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail'),
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
            'index' => Pages\ListTerkaits::route('/'),
            'create' => Pages\CreateTerkait::route('/create'),
            'edit' => Pages\EditTerkait::route('/{record}/edit'),
        ];
    }
}
