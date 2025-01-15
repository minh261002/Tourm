<?php

namespace App\Admin\DataTables\Property;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Property\PropertyRepositoryInterface;

class PropertyDataTable extends BaseDataTable
{
    protected $nameTable = 'activityTable';
    protected $repository;

    public function __construct(
        PropertyRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }
    public function setView(): void
    {
        $this->view = [
            'action' => 'admin.property.datatable.action',
            'status' => 'admin.property.datatable.status',
            'image' => 'admin.property.datatable.image',
        ];
    }
    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    public function setColumnSearch(): void
    {

        $this->columnAllSearch = [1, 2, 3, 4, 5];
        $this->columnSearchDate = [5];
        $this->columnSearchSelect = [
            [
                'column' => 4,
                'data' => [
                    'active' => 'Đang hoạt động',
                    'inactive' => 'Ngưng hoạt động',
                ]
            ]
        ];

    }
    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.activities', []);
    }

    protected function setCustomEditColumns(): void
    {
        $this->customEditColumns = [
            'action' => $this->view['action'],
            'status' => $this->view['status'],
            'created_at' => '{{formatDate($created_at)}}',
            'image' => $this->view['image'],
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
            'status',
            'image',
        ];
    }

    public function setCustomFilterColumns(): void
    {
        $this->customFilterColumns = [
            //
        ];
    }
}
