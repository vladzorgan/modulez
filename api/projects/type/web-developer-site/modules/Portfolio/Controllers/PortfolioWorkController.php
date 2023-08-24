<?php

namespace App\Modules\Portfolio\Controllers;

use App\Modules\ModuleHelper\Controllers\BaseController;
use App\Modules\Portfolio\Models\PortfolioWork;
use App\Modules\Portfolio\Repositories\PortfolioWorkRepository;
use App\Modules\Portfolio\Requests\PortfolioWorkStoreRequest;
use App\Modules\Portfolio\Requests\PortfolioWorkUpdateRequest;
use App\Modules\Portfolio\Resources\PortfolioWorkCollection;
use App\Modules\Portfolio\Resources\PortfolioWorkResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioWorkController extends BaseController
{
    private PortfolioWorkRepository $repository;

    public function __construct()
    {
        $this->repository = new PortfolioWorkRepository();
    }

    /**
     * Получить все
     * @return PortfolioWorkCollection
     */
    public function index(): PortfolioWorkCollection
    {
        $allPortfolioWorks = $this->repository->all();

        return new PortfolioWorkCollection($allPortfolioWorks);
    }

    /**
     * Создание
     * @param PortfolioWorkStoreRequest $request
     * @return PortfolioWorkResource
     */
    public function store(PortfolioWorkStoreRequest $request): PortfolioWorkResource
    {
        $data = $request->validated();

        $portfolioWork = PortfolioWork::query()->create($data);

        return new PortfolioWorkResource($portfolioWork);
    }

    /**
     * Обновление
     * @param PortfolioWorkUpdateRequest $request
     * @param PortfolioWork $portfolioWork
     * @return PortfolioWorkResource
     */
    public function update(PortfolioWorkUpdateRequest $request, PortfolioWork $work): PortfolioWorkResource
    {
        $data = $request->validated();

        $work->update($data);

        return new PortfolioWorkResource($work);
    }

    /**
     * Просмотр
     * @param PortfolioWork $portfolioWork
     * @return PortfolioWorkResource
     */
    public function show(PortfolioWork $portfolioWork): PortfolioWorkResource
    {
        return new PortfolioWorkResource($portfolioWork);
    }

    /**
     * Удаление
     * @param PortfolioWork $portfolioWork
     * @return JsonResource
     */
    public function destroy(PortfolioWork $portfolioWork): JsonResource
    {
        $portfolioWork->delete();

        return new JsonResource([
            'result' => true
        ]);
    }
}
