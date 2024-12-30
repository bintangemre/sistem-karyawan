<?php

namespace App\Filament\Resources;

use App\Models\Gaji;
use App\Models\Pegawai;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use App\Filament\Resources\GajiResource\Pages;

class GajiResource extends Resource
{
    protected static ?string $model = Gaji::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Pilihan pegawai
                Select::make('pegawai_id')
                    ->label('Pegawai')
                    ->options(Pegawai::all()->pluck('nama', 'id'))
                    ->searchable()
                    ->required(),

                // Input untuk gaji pokok
                TextInput::make('gaji_pokok')
                    ->label('Gaji Pokok')
                    ->numeric()
                    ->required(),

                // Input untuk tunjangan
                TextInput::make('tunjangan')
                    ->label('Tunjangan')
                    ->numeric()
                    ->default(0),

                // Input untuk potongan
                TextInput::make('potongan')
                    ->label('Potongan')
                    ->numeric()
                    ->default(0),

                // Input untuk total gaji (dibaca saja)
                TextInput::make('total_gaji')
                    ->label('Total Gaji')
                    ->numeric()
                    ->disabled()
                    ->default(0)
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set, $get) => $set('total_gaji', max(0, $get('gaji_pokok') + $get('tunjangan') - $get('potongan')))),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pegawai.nama')->label('Pegawai')->sortable()->searchable(),
                TextColumn::make('gaji_pokok')->label('Gaji Pokok')->money('idr', true),
                TextColumn::make('tunjangan')->label('Tunjangan')->money('idr', true),
                TextColumn::make('potongan')->label('Potongan')->money('idr', true),
                TextColumn::make('total_gaji')->label('Total Gaji')->money('idr', true),
                TextColumn::make('created_at')->label('Tanggal Dibuat')->dateTime(),
            ])
            ->filters([])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGajis::route('/'),
            'create' => Pages\CreateGaji::route('/create'),
            'edit' => Pages\EditGaji::route('/{record}/edit'),
        ];
    }
}