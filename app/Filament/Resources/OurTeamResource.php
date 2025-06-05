<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurTeamResource\Pages;
use App\Filament\Resources\OurTeamResource\RelationManagers;
use App\Models\OurTeam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurTeamResource extends Resource
{
    protected static ?string $model = OurTeam::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
      protected static ?string $navigationGroup = 'Home page';
    protected static ?string $navigationLabel = 'Our Teams';
    protected static ?string $modelLabel = 'Team';
    protected static ?int $navigationSort = 9;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\Section::make('Personal Information')
                ->schema([
                    Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('position')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('email')
                                ->email()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('phone')
                                ->tel()
                                ->maxLength(255),
                        ]),
                    Forms\Components\RichEditor::make('description')
                        ->columnSpanFull(),
                ])
                ->columns(1),

            Forms\Components\Section::make('Social Links')
                ->schema([
                    Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\TextInput::make('facebook')
                                ->maxLength(255)
                                ->columnSpanFull(),
                        ]),
                ]),

            Forms\Components\Section::make('Profile Image & Status')
                ->schema([
                    Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\FileUpload::make('image')
                                ->image()
                                ->imageEditor()
                                ->maxSize(2048)
                                ->directory('ourteams')
                                ->columnSpanFull()
                                ->required(),
                            Forms\Components\Toggle::make('is_active')
                                ->required()
                                ->default(true)
                                ->label('Active'),
                        ]),
                ]),
        ]);
}
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListOurTeams::route('/'),
            // 'create' => Pages\CreateOurTeam::route('/create'),
            // 'view' => Pages\ViewOurTeam::route('/{record}'),
            // 'edit' => Pages\EditOurTeam::route('/{record}/edit'),
        ];
    }
}
