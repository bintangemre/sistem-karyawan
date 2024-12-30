<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pegawai;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\EmailInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\NumberInput;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\PegawaiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PegawaiResource\RelationManagers;
use App\Filament\Resources\PegawaiResource\Pages\EditPegawai;
use App\Filament\Resources\PegawaiResource\Pages\ListPegawais;
use App\Filament\Resources\PegawaiResource\Pages\CreatePegawai;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk nama pegawai
                TextInput::make('nama')
                    ->label('Nama Pegawai')
                    ->required()
                    ->maxLength(255),

                // Input untuk email pegawai
                TextInput::make('email')
                ->label('Email Pegawai')
                ->email()  // Menambahkan validasi email
                ->required()
                ->maxLength(255),

                // Input untuk jabatan pegawai
                TextInput::make('jabatan')
                    ->label('Jabatan Pegawai')
                    ->required()
                    ->maxLength(255),
                    
                // Input untuk No Telepon pegawai
                TextInput::make('telepon')
                    ->label('Nomor Telepon')
                    ->required()
                    ->maxLength(15), // Opsional: Membatasi panjang nomor telepon

                // Jika ada kolom lain, misalnya alamat
                TextArea::make('alamat')
                    ->label('Alamat Pegawai')
                    ->maxLength(500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('telepon')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jabatan')->sortable(),

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
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }
}