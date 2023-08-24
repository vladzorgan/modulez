<?php

namespace App\Modules\Portfolio\Repositories;

use App\Modules\ModuleHelper\Repositories\BaseRepository;
use App\Modules\Portfolio\Models\PortfolioWork;

class PortfolioWorkRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = PortfolioWork::class;
        parent::__construct();
    }
}
