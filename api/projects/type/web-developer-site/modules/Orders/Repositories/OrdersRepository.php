<?php

namespace App\Modules\Orders\Repositories;

use App\Modules\ModuleHelper\Repositories\BaseRepository;
use App\Modules\Orders\Models\Order;

class OrdersRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = Order::class;
        parent::__construct();
    }
}
