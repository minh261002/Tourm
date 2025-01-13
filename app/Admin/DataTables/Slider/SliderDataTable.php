<?php

namespace App\Admin\DataTables\Slider;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Slider\SliderRepositoryInterface;
use App\Enums\ActiveStatus;

class SliderDataTable extends BaseDataTable
{
    protected $nameTable = 'sliderTable';
    protected $repository;

    public function __construct(
        SliderRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }
    public function setView(): void
    {
        $this->view = [
            'action' => 'admin.slider.datatable.action',
            'status' => 'admin.slider.datatable.status',
        ];
    }
    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    public function setColumnSearch(): void
    {

        $this->columnAllSearch = [0, 1, 2, 3];

        $this->columnSearchSelect = [
            [
                'column' => 3,
                'data' => [
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                ]
            ]
        ];
    }
    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.sliders', []);
    }

    protected function setCustomEditColumns(): void
    {
        $this->customEditColumns = [
            'action' => $this->view['action'],
            'name' => function ($role) {
                return '<code>' . $role->name . '</code>';
            },
            'status' => $this->view['status'],
            'desc' => function ($role) {
                return $role->desc;
            },
        ];
    }

    protected function setCustomAddColumns(): void
    {
        $this->customAddColumns = [
            'action' => $this->view['action'],
        ];
    }

    protected function setCustomRawColumns(): void
    {
        $this->customRawColumns = [
            'action',
            'name',
            'desc',
            'status',
        ];
    }

    public function setCustomFilterColumns(): void
    {
        $this->customFilterColumns = [
            //
        ];
    }
}