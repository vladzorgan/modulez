<?php

namespace App\Modules\Reviews\Controllers;

use App\Modules\ModuleHelper\Controllers\BaseController;
use App\Modules\Reviews\Models\Review;
use App\Modules\Reviews\Repositories\ReviewsRepository;
use App\Modules\Reviews\Requests\ReviewsStoreRequest;
use App\Modules\Reviews\Requests\ReviewsUpdateRequest;
use App\Modules\Reviews\Resources\ReviewsCollection;
use App\Modules\Reviews\Resources\ReviewsResource;
use App\Modules\Services\Models\Service;
use App\Modules\Services\Requests\ServiceStoreRequest;
use App\Modules\Services\Resources\ServicesCollection;
use App\Modules\Services\Resources\ServicesResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewsController extends BaseController
{
    private ReviewsRepository $repository;

    public function __construct()
    {
        $this->repository = new ReviewsRepository();
    }

    /**
     * Получить все
     * @return ReviewsCollection
     */
    public function index(): ReviewsCollection
    {
        $allReviews = $this->repository->all();

        return new ReviewsCollection($allReviews);
    }

    /**
     * Создание
     * @param ReviewsStoreRequest $request
     * @return ReviewsResource
     */
    public function store(ReviewsStoreRequest $request): ReviewsResource
    {
        $data = $request->validated();

        $review = Review::query()->create($data);

        return new ReviewsResource($review);
    }

    /**
     * Обновление услуги
     * @param ReviewsUpdateRequest $request
     * @param Review $review
     * @return ReviewsResource
     */
    public function update(ReviewsUpdateRequest $request, Review $review): ReviewsResource
    {
        $data = $request->validated();

        $review->update($data);

        return new ReviewsResource($review);
    }

    /**
     * Просмотр услуги
     * @param Review $review
     * @return ReviewsResource
     */
    public function show(Review $review): ReviewsResource
    {
        return new ReviewsResource($review);
    }

    /**
     * Удаление
     * @param Review $review
     * @return JsonResource
     */
    public function destroy(Review $review): JsonResource
    {
        $review->delete();

        return new JsonResource([
            'result' => true
        ]);
    }
}
