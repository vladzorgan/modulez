<?php

class ProductCardController extends \App\Http\Controllers\Controller {
    public function show(Product $product)
    {
        return new \Illuminate\Http\Resources\Json\JsonResource($product);
    }
}
