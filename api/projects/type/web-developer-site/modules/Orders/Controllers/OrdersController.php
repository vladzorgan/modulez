<?php

namespace App\Modules\Orders\Controllers;

use App\Modules\ModuleHelper\Controllers\BaseController;
use App\Modules\Orders\Models\Order;
use App\Modules\Orders\Repositories\OrdersRepository;
use App\Modules\Orders\Requests\OrdersStoreRequest;
use App\Modules\Orders\Requests\OrdersUpdateRequest;
use App\Modules\Orders\Resources\OrdersCollection;
use App\Modules\Orders\Resources\OrdersResource;
use Illuminate\Http\Resources\Json\JsonResource;

class OrdersController extends BaseController
{
    private OrdersRepository $repository;

    public function __construct()
    {
        $this->repository = new OrdersRepository();
    }

    /**
     * Получить все
     * @return OrdersCollection
     */
    public function index(): OrdersCollection
    {
        $allOrders = $this->repository->all();

        return new OrdersCollection($allOrders);
    }

    /**
     * Создание
     * @param OrdersStoreRequest $request
     * @return OrdersResource
     */
    public function store(OrdersStoreRequest $request): OrdersResource
    {
        $data = $request->validated();

        $order = Order::query()->create($data);

        return new OrdersResource($order);
    }

    /**
     * Обновление
     * @param OrdersUpdateRequest $request
     * @param Order $order
     * @return OrdersResource
     */
    public function update(OrdersUpdateRequest $request, Order $order): OrdersResource
    {
        $data = $request->validated();

        $order->update($data);

        return new OrdersResource($order);
    }

    /**
     * Просмотр
     * @param Order $order
     * @return OrdersResource
     */
    public function show(Order $order): OrdersResource
    {
        return new OrdersResource($order);
    }

    /**
     * Удаление
     * @param Order $order
     * @return JsonResource
     */
    public function destroy(Order $order): JsonResource
    {
        $order->delete();

        return new JsonResource([
            'result' => true
        ]);
    }
}
