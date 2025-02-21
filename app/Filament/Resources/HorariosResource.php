<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HorariosResource\Pages;
use App\Filament\Resources\HorariosResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use App\Models\Horario;
use Filament\Forms;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\Rule;

class HorariosResource extends Resource
{
    protected static ?string $model = Horario::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('num_placa')->label('Seleciona Digitos de la placa')
                ->multiple()
                ->required()
                ->searchable()
                ->options([
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6',
                    '7' => '7',
                    '8' => '8',
                    '9' => '9',
                    '0' => '0',
                ])->validationMessages([
                    'required'=>'Seleciona el digito de la placa',
                ]),
                Select::make('dia')->options([
                    'Lunes' => 'Lunes',
                    'Martes' => 'Martes',
                    'Miercoles' => 'Miercoles',
                    'Jueves' => 'Jueves',
                    'Viernes'=>'Viernes',
                ])->required()->unique()->validationMessages([
                    'unique' => 'El día ya fue registrado',
                    'required'=>'Seleciona el día',
                ]),
                TimePicker::make('hora_inicio_dia')->required()
                ->validationMessages([
                    'required'=>'Ingresa la hora',

                ]),
                TimePicker::make('hora_fin_dia')->required()
                ->validationMessages([
                    'required'=>'Ingresa la hora',

                ]),
                TimePicker::make('hora_inicio_tarde')->required()
                ->validationMessages([
                    'required'=>'Ingresa la hora',

                ]),
                TimePicker::make('hora_fin_tarde')->required()
                ->validationMessages([
                    'required'=>'Ingresa la hora',

                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('dia'),
                TextColumn::make('num_placa')->label('Digitos de las placas'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListHorarios::route('/'),
            'create' => Pages\CreateHorarios::route('/create'),
            'edit' => Pages\EditHorarios::route('/{record}/edit'),
        ];
    }
}
