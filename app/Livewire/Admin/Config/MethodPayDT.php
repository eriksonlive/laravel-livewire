<?php

namespace App\Livewire\Admin\Config;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\PaymentMethods;

class MethodPayDT extends DataTableComponent
{
    protected $model = PaymentMethods::class;
    protected $listeners = ['methodAdded' => '$refresh'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setDefaultSort('id', 'desc');

        $this->setPerPageAccepted([2, 5, 7, 9]);

        $this->setPerPage(2);

        $this->setThAttributes(function (Column $column) {

            if ($column->isField('id')) {
                return [
                    'class' => 'flex text-red-500 justify-end text-end pr-4 py-2'
                ];
            }

            return [];
        });
    }

    public function columns(): array
    {
        return [
            Column::make("Metodo", 'method')
                ->sortable()
                ->searchable(),
            Column::make('Acciones', 'id')
                ->format(fn($value, $row, Column $column) => '<button class="btn p-2 hover:text-white hover:bg-red-500 ">Editar</button>') // Personaliza las celdas
                ->html()

        ];
    }
}
