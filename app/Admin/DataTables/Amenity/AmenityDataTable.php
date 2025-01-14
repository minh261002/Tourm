<?php

namespace App\Admin\DataTables\Amenity;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Amenity\AmenityRepositoryInterface;

class AmenityDataTable extends BaseDataTable
{
    protected $nameTable = 'amenityTable';
    protected $repository;

    public function __construct(
        AmenityRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }
    public function setView(): void
    {
        $this->view = [
            'action' => 'admin.amenity.datatable.action',
            'status' => 'admin.amenity.datatable.status',
            'image' => 'admin.amenity.datatable.image',
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
            //
        ];

    }
    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.amenities', []);
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