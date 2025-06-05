<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left';
      protected static ?string $navigationGroup = 'Home page';
    protected static ?string $navigationLabel = 'Testimonials';
    protected static ?string $modelLabel = 'Testimonial';
    protected static ?int $navigationSort = 13;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Information')
                    ->description('Provide the main details.')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('company_name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('position')
                                    ->required()
                                    ->columnSpanFull()
                                    ->maxLength(255),
                            ]),
                    ]),

                Forms\Components\Section::make('Feedback Details')
                    ->description('Provide the message and service details.')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\RichEditor::make('message')
                                    ->required()
                                    ->maxLength(1000)
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('service')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('service_location')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Select::make('rating')
                                    ->columnSpanFull()
                                    ->required()
                                    ->options([
                                        '1' => '1 Star',
                                        '1.5' => '1.5 Stars',
                                        '2' => '2 Stars',
                                        '2.5' => '2.5 Stars',
                                        '3' => '3 Stars',
                                        '3.5' => '3.5 Stars',
                                        '4' => '4 Stars',
                                        '4.5' => '4.5 Stars',
                                        '5' => '5 Stars',
                                    ]),
                            ]),
                    ]),

                Forms\Components\Section::make('Media & Status')
                    ->description('Upload an image and set the active status.')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->columnSpanFull()
                                    ->maxSize(1024)
                                    ->directory('testimonials')
                                    ->imageEditor()
                                    ->image()
                                    ->required(),
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Active')
                                    ->default(true)
                                    ->required(),
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
                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('message')
                    ->html()
                    ->limit(50)
                    ->tooltip(fn($record) => $record->message)
                    ->html(),
                Tables\Columns\TextColumn::make('service')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rating')
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
            'index' => Pages\ListTestimonials::route('/'),
            // 'create' => Pages\CreateTestimonial::route('/create'),
            // 'view' => Pages\ViewTestimonial::route('/{record}'),
            // 'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
