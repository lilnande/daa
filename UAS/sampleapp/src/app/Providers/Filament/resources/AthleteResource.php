<?php
namespace App\Filament\Resources;

use App\Models\Athlete;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;

class AthleteResource extends Resource
{
    protected static ?string $model = Athlete::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Athletes';

    // Form method for creating/editing athlete
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('age')->required(),
            Forms\Components\TextInput::make('sport')->required(),
        ]);
    }

    // Table method for listing athletes
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('age')->sortable(),
            Tables\Columns\TextColumn::make('sport')->sortable(),
        ]);
    }
}
