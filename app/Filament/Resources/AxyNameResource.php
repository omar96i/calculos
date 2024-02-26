<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AxyNameResource\Pages;
use App\Filament\Resources\AxyNameResource\RelationManagers;
use App\Filament\Resources\AxyNameResource\RelationManagers\AxyValuesRelationManager;
use App\Models\AxyName;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AxyNameResource extends Resource
{
    protected static ?string $model = AxyName::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Axy titulos';

    protected static ?string $slug = 'axy-titulos';

    protected static ?string $modelLabel = 'Axy titulos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Nombre')
                    ->required()
                    ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            AxyValuesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAxyNames::route('/'),
            'create' => Pages\CreateAxyName::route('/create'),
            'edit' => Pages\EditAxyName::route('/{record}/edit'),
        ];
    }
}
