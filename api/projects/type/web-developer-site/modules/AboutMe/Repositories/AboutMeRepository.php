<?php

namespace App\Modules\AboutMe\Repositories;

use App\Modules\AboutMe\Models\AboutMe;
use App\Modules\ModuleHelper\Repositories\BaseRepository;

class AboutMeRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = AboutMe::class;
        parent::__construct();
    }
}
