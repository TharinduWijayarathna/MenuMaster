<?php

namespace App\Http\Livewire\Admin\UserManagement\Tables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Termwind\Components\Span;

class All extends DataTableComponent
{

    public function builder(): Builder
    {
        return User::query()
            ->withTrashed()
            ->orderBy('name', 'asc');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setAdditionalSelects(['id as id'])
            // ->setTableRowUrl(function ($row) {
            //     return route('users.edit', $row->id);
            // })
            ->setPerPageAccepted([100, 250, 500, 1000])
            ->setPerPage(100)
            ->setTableAttributes([
                'default' => false,
                'class' => 'table align-items-center mb-0',
            ])
            ->setTrAttributes(function ($row, $index) {
                return [
                    'default' => false,
                    'class' => 'active-preloader',
                ];

                return [];
            })
            ->setFilterLayoutSlideDown(function (Column $column, $row, $columnIndex, $rowIndex) {
                if ($column->isField('id')) {
                    return [
                        'class' => 'text-start',
                    ];
                }
                if ($column->isField('name')) {
                    return [
                        'class' => 'text-start',
                    ];
                }

                return [];
            })
            ->setAdditionalSelects(['id as id'])
            ->setColumnSelectDisabled();
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->searchable(),
            Column::make("Email", "email")
                ->searchable(),
            Column::make("User Type", "")
            ->searchable()
            ->format(
                fn ($value, $row, Column $column) => $this->userType($row)
            )
            ->html(),
        ];
    }

    public function userType($user)
    {
        if ($user->user_type == 0) {
            return "<span class='badge bg-primary'>CASHIER</span>";
        }elseif ($user->user_type == 1) {
            return "<span class='badge bg-success'>ADMIN</span>";
        }elseif ($user->user_type == 2) {
            return "<span class='badge bg-warning'>CUSTOMER</span>";
        }elseif ($user->user_type == 3) {
            return "<span class='badge bg-info'>CHEF</span>";
        }
    }
}
