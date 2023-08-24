<?php

namespace App\Modules\AboutMe\Controllers;

use App\Modules\AboutMe\Models\AboutMe;
use App\Modules\AboutMe\Repositories\AboutMeRepository;
use App\Modules\AboutMe\Requests\AboutMeStoreRequest;
use App\Modules\AboutMe\Requests\AboutMeUpdateRequest;
use App\Modules\AboutMe\Resources\AboutMeResource;
use App\Modules\ModuleHelper\Controllers\BaseController;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutMeController extends BaseController
{
    private AboutMeRepository $repository;

    public function __construct()
    {
        $this->repository = new AboutMeRepository();
    }

    /**
     * Получить все
     * @return AboutMeResource
     */
    public function index(): AboutMeResource
    {
        $aboutMe = $this->repository->query()->first();

        return new AboutMeResource($aboutMe);
    }

    /**
     * Создание
     * @param AboutMeStoreRequest $request
     * @return AboutMeResource
     */
    public function store(AboutMeStoreRequest $request): AboutMeResource
    {
        $data = $request->validated();

        $aboutMe = AboutMe::query()->create($data);

        return new AboutMeResource($aboutMe);
    }

    /**
     * Обновление
     * @param AboutMeUpdateRequest $request
     * @param AboutMe $aboutMe
     * @return AboutMeResource
     */
    public function update(AboutMeUpdateRequest $request, AboutMe $aboutMe): AboutMeResource
    {
        $data = $request->validated();

        $aboutMe->update($data);

        return new AboutMeResource($aboutMe);
    }

    /**
     * Просмотр
     * @param AboutMe $aboutMe
     * @return AboutMeResource
     */
    public function show(AboutMe $aboutMe): AboutMeResource
    {
        return new AboutMeResource($aboutMe);
    }

    /**
     * Удаление
     * @param AboutMe $aboutMe
     * @return JsonResource
     */
    public function destroy(AboutMe $aboutMe): JsonResource
    {
        $aboutMe->delete();

        return new JsonResource([
            'result' => true
        ]);
    }
}
