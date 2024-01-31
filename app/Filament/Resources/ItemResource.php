<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Filament\Resources\ItemResource\RelationManagers;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('format')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('leaf_color')
                ->options([
                    'verde' => 'Verde',
                    'naranja' => 'Naranja',
                    'rojo' => 'Rojo',
                ])
                ->required(),
                Forms\Components\TextInput::make('observation')
                ->required()
                ->maxLength(255),
                Forms\Components\Select::make('type')
                ->options([
                    'a' => 'A',
                    'b' => 'B',                    
                ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('format')
                    ->searchable(),
                Tables\Columns\TextColumn::make('leaf_color'),
                Tables\Columns\TextColumn::make('observation'),
                Tables\Columns\TextColumn::make('type'),
                
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'a' => 'A',
                        'b' => 'B', 
                    ]),
                Tables\Filters\SelectFilter::make('leaf_color')
                    ->options([
                        'verde' => 'Verde',
                        'naranja' => 'Naranja',
                        'rojo' => 'Rojo',
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}
