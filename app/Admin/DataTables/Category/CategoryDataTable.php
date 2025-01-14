<?php

namespace App\Admin\DataTables\Category;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Category\CategoryRepositoryInterface;

class CategoryDataTable extends BaseDataTable
{
    protected $nameTable = 'categoryTable';
    protected $repository;

    public function __construct(
        CategoryRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }
    public function setView(): void
    {
        $this->view = [
            'action' => 'admin.category.datatable.action',
            'status' => 'admin.category.datatable.status',
            'image' => 'admin.category.datatable.image',
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
