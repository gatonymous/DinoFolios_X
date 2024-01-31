<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortafolioResource\Pages;
use App\Filament\Resources\PortafolioResource\RelationManagers;
use App\Models\Portafolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortafolioResource extends Resource
{
    protected static ?string $model = Portafolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([                
                Forms\Components\Select::make('status')
                ->options([
                    'completo' => 'Completo',
                    'observado' => 'Observado',
                    'pendiente' => 'Pendiente',
                ])
                ->required(),
                           
                Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->searchable()
                ->preload()                
                ->required(),            
                Forms\Components\Select::make('semestre_id')
                ->relationship('semestre', 'name')
                ->searchable()
                ->preload()                
                ->required(),
                Forms\Components\Select::make('curso_id')
                ->relationship('curso', 'name')
                ->searchable()
                ->preload()                
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),                
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('semestre.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('curso.name')
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'completo' => 'Completo',
                        'observado' => 'Observado',
                        'pendiente' => 'Pendiente',
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
            'index' => Pages\ListPortafolios::route('/'),
            'create' => Pages\CreatePortafolio::route('/create'),
            'edit' => Pages\EditPortafolio::route('/{record}/edit'),
        ];
    }
}
