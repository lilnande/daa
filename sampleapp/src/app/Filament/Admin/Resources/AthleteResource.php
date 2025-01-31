<?php

namespace App\Filament\Resources;

use App\Models\Athlete;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Pages\ListRecords;

class AthleteResource extends Resource
{
    protected static ?string $model = Athlete::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Athletes';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Name'),
            Forms\Components\TextInput::make('age')
                ->required()
                ->label('Age'),
            Forms\Components\TextInput::make('contact')
                ->required()
                ->label('Contact'),
            Forms\Components\TextInput::make('sport')
                ->nullable()
                ->label('Sport'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('age')->sortable(),
            Tables\Columns\TextColumn::make('contact')->sortable(),
            Tables\Columns\TextColumn::make('sport')->sortable()->nullable(),
        ]);
    }
}
