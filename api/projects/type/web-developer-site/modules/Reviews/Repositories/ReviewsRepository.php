<?php

namespace App\Modules\Reviews\Repositories;

use App\Modules\ModuleHelper\Repositories\BaseRepository;
use App\Modules\Services\Models\Service;

class ReviewsRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = Service::class;
        parent::__construct();
    }
}
