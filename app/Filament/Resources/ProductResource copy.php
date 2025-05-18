<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Product Details')
                    ->description('Provide the main information about the product.')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Select::make('category_id')
                                    ->relationship(
                                        'category',
                                        'title',
                                        fn($query) => $query->where('is_active', true)
                                    )
                                    ->label('Product Category')
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->createOptionForm([
                                        Forms\Components\Section::make('Product Category Details')
                                            ->description('Define the basic information for this product category.')
                                            ->schema([
                                                Forms\Components\TextInput::make('title')
                                                    ->label('Category Title')
                                                    ->required()
                                                    ->unique(ignoreRecord: true)
                                                    ->maxLength(255)
                                                    ->live(onBlur: true)
                                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                                    ->dehydrateStateUsing(fn(?string $state) => $state),
                                                Forms\Components\TextInput::make('slug')
                                                    ->label('URL Slug')
                                                    ->unique(ignoreRecord: true)
                                                    ->required()
                                                    ->disabled()
                                                    ->maxLength(255)
                                                    ->dehydrated() // Ensures it is sent with the form
                                                    ->dehydrateStateUsing(fn(?string $state, Get $get) => $state ?? Str::slug($get('title'))),
                                                Forms\Components\Toggle::make('is_active')
                                                    ->label('Active')
                                                    ->default(true)
                                                    ->required(),
                                            ]),
                                    ]),

                                Forms\Components\Select::make('is_new')
                                    ->label('Product Type')
                                    ->options([
                                        1 => 'New Product',
                                        0 => 'Second Hand Product',
                                    ])
                                    ->required(),

                                Forms\Components\TextInput::make('name')
                                    ->label('Product Name')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (callable $set, $state) {
                                        // Generate SKU from product name
                                        $prefix = strtoupper(Str::slug(substr($state, 0, 5), '')); // up to 10 chars, alphanumeric only
                                        $random = strtoupper(Str::random(4)); // random suffix
                                        $timestamp = now()->format('His');
                                        $sku = "{$prefix}-{$random}-{$timestamp}";
                                        $set('sku', $sku);
                                    })
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->dehydrateStateUsing(fn(?string $state) => $state),
                                Forms\Components\TextInput::make('in_stock')
                                    ->label('Stock Quantity')
                                    ->required()
                                    ->numeric(),
                                Forms\Components\TextInput::make('slug')
                                    ->label('URL Slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->disabled()
                                    ->maxLength(255)
                                    ->dehydrated() // Ensures it is sent with the form
                                    ->dehydrateStateUsing(fn(?string $state, Get $get) => $state ?? Str::slug($get('name'))),
                                Forms\Components\TextInput::make('sku')
                                    ->label('SKU')
                                    ->required()
                                    ->disabled()
                                    ->maxLength(255)
                                    ->dehydrated() // ensures it gets saved to DB
                                    ->extraAttributes(['readonly' => true]), // makes it uneditable,
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Active')
                                    ->required()
                                    ->default(true),
                            ]),

                    ]),

                Forms\Components\Section::make('Media & Description')
                    ->description('Upload the product image and add a description.')
                    ->columns(1)
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Product Image')
                            ->directory('products-images')
                            ->required()
                            ->image()
                            ->multiple()
                            ->maxFiles(5)
                            ->imageEditor()
                            // ->columnSpanFull()
                            ->helperText('You can upload up to 5 images.'),

                        Forms\Components\RichEditor::make('description')
                            ->label('Product Description')
                            ->required(),
                    ]),

                Forms\Components\Section::make('Product Features')
                    ->description('Add product features.')
                    ->schema([
                        Forms\Components\Repeater::make('feature')
                            ->label('')
                            ->schema([
                                Forms\Components\TextInput::make('feature')
                                    ->label('Product Feature')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            // ->columnSpan('full')
                            ->addable()
                            ->deletable(),
                    ])
                    ->collapsible(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('in_stock')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sku')
                    ->label('SKU')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('is_active'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
