<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\BusinessSetup;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BusinessSetupResource\Pages;
use App\Filament\Resources\BusinessSetupResource\RelationManagers;

class BusinessSetupResource extends Resource
{
    protected static ?string $model = BusinessSetup::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationLabel = 'Business Setup';
    protected static ?string $modelLabel = 'Business Setup';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Company Information')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('phone')
                                    ->prefix('+977')
                                    ->tel()
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('address')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('working_hours')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                            ]),
                    ]),

                Forms\Components\Section::make('Descriptions & Map')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\RichEditor::make('company_description')
                                    ->required(),
                                Forms\Components\RichEditor::make('footer_description')
                                    ->required(),
                                Forms\Components\TextInput::make('map_iframe')
                                    ->columnSpanFull()
                                    ->required(),
                            ])
                    ]),

                Forms\Components\Section::make('Social Media Links')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('facebook')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('instagram')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('tiktok')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('youtube')
                                    ->maxLength(255),
                            ]),
                    ]),

                Forms\Components\Section::make('Branding')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\FileUpload::make('logo_white')
                                    ->required()
                                    ->directory('business-setup')
                                    ->image()
                                    ->imageEditor()
                                    ->maxSize('2048'),
                                Forms\Components\FileUpload::make('logo_colored')
                                    ->required()
                                    ->directory('business-setup')
                                    ->image()
                                    ->imageEditor()
                                    ->maxSize('2048'),
                                Forms\Components\FileUpload::make('thumbnail_image')
                                    ->required()
                                    ->directory('business-setup')
                                    ->image()
                                    ->imageEditor()
                                    ->maxSize('2048')
                                    ->columnSpanFull(),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail_image')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo_white')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo_colored')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('working_hours')
                    ->searchable(),
                Tables\Columns\TextColumn::make('map_iframe')
                    ->limit(20),
                Tables\Columns\TextColumn::make('facebook')
                    ->limit(20)
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram')
                    ->limit(20)
                    ->searchable(),
                Tables\Columns\TextColumn::make('tiktok')
                    ->limit(20)
                    ->searchable(),
                Tables\Columns\TextColumn::make('youtube')
                    ->limit(20)
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
                Tables\Actions\BulkActionGroup::make([]),
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
            'index' => Pages\ListBusinessSetups::route('/'),
            'create' => Pages\CreateBusinessSetup::route('/create'),
            'view' => Pages\ViewBusinessSetup::route('/{record}'),
            'edit' => Pages\EditBusinessSetup::route('/{record}/edit'),
        ];
    }
}
