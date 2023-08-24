<?php

namespace App\Modules\Services\Repositories;

use App\Modules\ModuleHelper\Repositories\BaseRepository;
use App\Modules\Services\Models\Service;

class ServiceRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = Service::class;
        parent::__construct();
    }
}
