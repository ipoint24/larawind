<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;

use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UsersTable extends LivewireDatatable
{
    public $model = User::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')
                ->label('ID')
                ->linkTo('job', 6),

            Column::name('name')
                ->defaultSort('asc')
                ->searchable()
                ->filterable(),

            Column::name('email')
                ->defaultSort('asc')
                ->searchable(),


            DateColumn::name('created_at')
                ->label('Creation Date')
                ->format('d.m.Y')
                ->filterable()

        ];
    }
}