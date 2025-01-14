<?php

namespace App\Admin\DataTables\Activity;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Activity\ActivityRepositoryInterface;

class ActivityDataTable extends BaseDataTable
{
    protected $nameTable = 'activityTable';
    protected $repository;

    public function __construct(
        ActivityRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }
    public function setView(): void
    {
        $this->view = [
            'action' => 'admin.activity.datatable.action',
            'status' => 'admin.activity.datatable.status',
            'image' => 'admin.activity.datatable.image',
        ];
    }
    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    public function setColumnSearch(): void
    {

        $this->columnAllSearch = [1, 2, 3];
        $this->columnSearchDate = [3];
        $this->columnSearchSelect = [
            [
                'column' => 2,
                'data' => [
                    'active' => 'Đang hoạt động',
                    'inactive' => 'Ngưng hoạt động',
                ]
            ]
        ];

    }
    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.categories', []);
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
