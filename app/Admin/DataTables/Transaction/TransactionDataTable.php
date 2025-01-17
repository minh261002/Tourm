<?php

namespace App\Admin\DataTables\Transaction;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Transaction\TransactionRepositoryInterface;

class TransactionDataTable extends BaseDataTable
{
    protected $nameTable = 'amenityTable';
    protected $repository;

    public function __construct(
        TransactionRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }
    public function setView(): void
    {
        $this->view = [
            'action' => 'admin.transaction.datatable.action',
            'status' => 'admin.transaction.datatable.status',
            'image' => 'admin.transaction.datatable.image',
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
        $this->customColumns = config('datatable_columns.transactions', []);
    }

    protected function setCustomEditColumns(): void
    {
        $this->customEditColumns = [
            'action' => $this->view['action'],
            'status' => $this->view['status'],
            'created_at' => '{{formatDate($created_at)}}',
            'icon' => $this->view['image'],
            'amenity_group' => '{{config("amenities.".$amenity_group)}}',
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
            'icon',
        ];
    }

    public function setCustomFilterColumns(): void
    {
        $this->customFilterColumns = [
            //
        ];
    }
}