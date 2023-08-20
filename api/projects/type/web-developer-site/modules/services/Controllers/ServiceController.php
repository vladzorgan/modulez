<?php

namespace App\Modules\Services\Controllers;

use App\Modules\ModuleHelper\Controllers\BaseController;
use App\Modules\Services\Models\Service;
use App\Modules\Services\Repositories\ServiceRepository;
use App\Modules\Services\Requests\ServiceStoreRequest;
use App\Modules\Services\Resources\ServicesCollection;
use App\Modules\Services\Resources\ServicesResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceController extends BaseController
{
    private ServiceRepository $repository;

    public function __construct()
    {
        $this->repository = new ServiceRepository();
    }

    /**
     * Получить все услуги
     * @return ServicesCollection
     */
    public function index(): ServicesCollection
    {
        $allServices = $this->repository->all();

        return new ServicesCollection($allServices);
    }

    /**
     * Создание услуги
     * @param ServiceStoreRequest $request
     * @return ServicesResource
     */
    public function store(ServiceStoreRequest $request): ServicesResource
    {
        $data = $request->validated();

        $service = Service::query()->create($data);

        return new ServicesResource($service);
    }

    /**
     * Обновление услуги
     * @param ServiceStoreRequest $request
     * @param Service $service
     * @return ServicesResource
     */
    public function update(ServiceStoreRequest $request, Service $service): ServicesResource
    {
        $data = $request->validated();

        $service = $service->update($data);

        return new ServicesResource($service);
    }

    /**
     * Просмотр услуги
     * @param Service $service
     * @return ServicesResource
     */
    public function show(Service $service): ServicesResource
    {
        return new ServicesResource($service);
    }

    /**
     * Удаление услуги
     * @param Service $service
     * @return JsonResource
     */
    public function destroy(Service $service): JsonResource
    {
        $service->delete();

        return new JsonResource([
            'result' => true
        ]);
    }
}
