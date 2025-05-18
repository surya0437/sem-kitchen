<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SellEquipmentResource\Pages;
use App\Filament\Resources\SellEquipmentResource\RelationManagers;
use App\Models\SellEquipment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SellEquipmentResource extends Resource
{
    protected static ?string $model = SellEquipment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('equipment_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('equipment_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('equipment_condition')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('image')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('equipment_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('equipment_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('equipment_condition')
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
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
                 Tables\Actions\Action::make('View Detials')
                    ->icon('heroicon-o-eye')
                    ->url(fn($record) => route('equipment-details', $record->slug))
                    ->openUrlInNewTab(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSellEquipment::route('/'),
        ];
    }
}
