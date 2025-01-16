<?php

namespace App\Admin\Repositories\Transaction;

use App\Admin\Repositories\BaseRepository;
use App\Models\Transaction;

class TransactionRepository extends BaseRepository implements TransactionRepositoryInterface
{
    public function getModel()
    {
        return Transaction::class;
    }
}