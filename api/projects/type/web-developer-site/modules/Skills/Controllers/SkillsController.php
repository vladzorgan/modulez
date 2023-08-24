<?php

namespace App\Modules\Skills\Controllers;

use App\Modules\ModuleHelper\Controllers\BaseController;
use App\Modules\Portfolio\Models\PortfolioWork;
use App\Modules\Portfolio\Repositories\PortfolioWorkRepository;
use App\Modules\Portfolio\Requests\PortfolioWorkStoreRequest;
use App\Modules\Portfolio\Resources\PortfolioWorkCollection;
use App\Modules\Portfolio\Resources\PortfolioWorkResource;
use App\Modules\Skills\Models\Skill;
use App\Modules\Skills\Repositories\SkillsRepository;
use App\Modules\Skills\Requests\SkillsStoreRequest;
use App\Modules\Skills\Requests\SkillsUpdateRequest;
use App\Modules\Skills\Resources\SkillsCollection;
use App\Modules\Skills\Resources\SkillsResource;
use Illuminate\Http\Resources\Json\JsonResource;

class SkillsController extends BaseController
{
    private SkillsRepository $repository;

    public function __construct()
    {
        $this->repository = new SkillsRepository();
    }

    /**
     * Получить все
     * @return SkillsCollection
     */
    public function index(): SkillsCollection
    {
        $allSkills= $this->repository->all();

        return new SkillsCollection($allSkills);
    }

    /**
     * Создание
     * @param SkillsStoreRequest $request
     * @return SkillsResource
     */
    public function store(SkillsStoreRequest $request): SkillsResource
    {
        $data = $request->validated();

        $skill = Skill::query()->create($data);

        return new SkillsResource($skill);
    }

    /**
     * Обновление
     * @param SkillsUpdateRequest $request
     * @param Skill $skill
     * @return SkillsResource
     */
    public function update(SkillsUpdateRequest $request, Skill $skill): SkillsResource
    {
        $data = $request->validated();

        $skill->update($data);

        return new SkillsResource($skill);
    }

    /**
     * Просмотр
     * @param Skill $skill
     * @return SkillsResource
     */
    public function show(Skill $skill): SkillsResource
    {
        return new SkillsResource($skill);
    }

    /**
     * Удаление услуги
     * @param Skill $skill
     * @return JsonResource
     */
    public function destroy(Skill $skill): JsonResource
    {
        $skill->delete();

        return new JsonResource([
            'result' => true
        ]);
    }
}
