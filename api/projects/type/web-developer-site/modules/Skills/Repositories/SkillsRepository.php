<?php

namespace App\Modules\Skills\Repositories;

use App\Modules\ModuleHelper\Repositories\BaseRepository;
use App\Modules\Skills\Models\Skill;

class SkillsRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = Skill::class;
        parent::__construct();
    }
}
