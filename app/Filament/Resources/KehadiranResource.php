<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KehadiranResource\Pages;
use App\Models\Kehadiran;
use App\Models\Pegawai;  // Untuk relasi pegawai
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Checkbox;

class KehadiranResource extends Resource
{
    protected static ?string $model = Kehadiran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Field untuk memilih pegawai
                Select::make('pegawai_id')
                    ->label('Pegawai')
                    ->options(Pegawai::all()->pluck('nama', 'id'))
                    ->required(),

                // Field untuk memilih tanggal kehadiran
                DatePicker::make('tanggal')
                    ->label('Tanggal Kehadiran')
                    ->required(),

                // Field untuk memilih status kehadiran
                Select::make('status')
                    ->label('Status Kehadiran')
                    ->options([
                        'Hadir' => 'Hadir',
                        'Sakit' => 'Sakit',
                        'Izin' => 'Izin',
                        'Absen' => 'Absen',
                    ])
                    ->required(), // Pastikan field ini wajib diisi
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Menampilkan nama pegawai yang hadir
                Tables\Columns\TextColumn::make('pegawai.nama')->label('Pegawai'),
                
                // Menampilkan tanggal kehadiran
                Tables\Columns\TextColumn::make('tanggal')->label('Tanggal Kehadiran'),
                
                // Menampilkan status kehadiran
                Tables\Columns\IconColumn::make('status')
                    ->boolean()
                    ->label('Hadir')
                    ->sortable(),
            ])
            ->filters([
                // Filter untuk tanggal
                Tables\Filters\SelectFilter::make('tanggal')
                    ->options([
                        'today' => 'Hari Ini',
                        'this_week' => 'Minggu Ini',
                    ]),
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
            // Bisa menambahkan relasi jika ada, misalnya ke Pegawai
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKehadirans::route('/'),
            'create' => Pages\CreateKehadiran::route('/create'),
            'edit' => Pages\EditKehadiran::route('/{record}/edit'),
        ];
    }
}