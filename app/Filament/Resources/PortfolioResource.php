<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Portfolio;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use App\Filament\Resources\PortfolioResource\Pages;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),

                TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                TextArea::make('goal')
                    ->label('Spesialisasi')
                    ->required(),

                TextInput::make('phone')
                    ->label('Nomor Telepon')
                    ->required()
                    ->regex('/^\d+$/')
                    ->maxLength(15),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->sortable()->searchable()->label('Nama'),
                TextColumn::make('nim')->sortable()->searchable()->label('NIM'),
                TextColumn::make('email')->sortable()->searchable()->label('Email'),
                TextColumn::make('goal')->label('Spesialisasi'),
                TextColumn::make('phone')->label('Nomor Telepon'),
                Tables\Columns\ImageColumn::make('image')
                ->label('Foto')
                ->disk('public'), // Menentukan disk 'public'

            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}