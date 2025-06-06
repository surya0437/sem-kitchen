<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurClientResource\Pages;
use App\Filament\Resources\OurClientResource\RelationManagers;
use App\Models\OurClient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurClientResource extends Resource
{
    protected static ?string $model = OurClient::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Home page';
    protected static ?string $navigationLabel = 'Our Clients';
    protected static ?string $modelLabel = 'Client';
    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->columnSpanFull()
                    ->maxSize(1024)
                    ->directory('ourclients')
                    ->image()
                    ->imageEditor()
                    ->required(),
                Forms\Components\Toggle::make('is_active')
                    ->required()
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_active')
                    ->label('Active'),
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
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListOurClients::route('/'),
            // 'create' => Pages\CreateOurClient::route('/create'),
            // 'view' => Pages\ViewOurClient::route('/{record}'),
            // 'edit' => Pages\EditOurClient::route('/{record}/edit'),
        ];
    }
}
