<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoContentResource\Pages;
use App\Filament\Resources\SeoContentResource\RelationManagers;
use App\Models\SeoContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeoContentResource extends Resource
{
    protected static ?string $model = SeoContent::class;

    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationLabel = 'SEO Content';
    protected static ?string $modelLabel = 'SEO Content';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('SEO Metadata')
                    ->description('Provide SEO and Open Graph meta information.')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('meta_description')
                                    ->label('Meta Description')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('meta_keywords')
                                    ->label('Meta Keywords')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('meta_author')
                                    ->label('Meta Author')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('og_description')
                                    ->label('Open Graph Description')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('meta_description')
                    ->html()
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_keywords')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('og_description')
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
            'index' => Pages\ListSeoContents::route('/'),
            // 'create' => Pages\CreateSeoContent::route('/create'),
            // 'view' => Pages\ViewSeoContent::route('/{record}'),
            // 'edit' => Pages\EditSeoContent::route('/{record}/edit'),
        ];
    }
}
