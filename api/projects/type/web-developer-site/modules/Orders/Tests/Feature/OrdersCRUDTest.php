<?php

namespace App\Modules\Orders\Tests\Feature;

use App\Modules\AboutMe\Models\AboutMe;
use App\Modules\Orders\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrdersCRUDTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test can show all items
     */
    public function test_orders_index(): void
    {
        Order::factory()->count(1)->create();

        $response = $this->get('/api/orders');

        $response->assertStatus(200);
    }

    /**
     * Test can show show one item
     */
    public function test_orders_show(): void
    {
        Order::factory()->count(1)->create();

        $order = Order::query()->first();

        $response = $this->get('/api/orders/' . $order->id);

        $response->assertStatus(200);
    }


    /**
     * Test can show show one item
     */
    public function test_order_store(): void
    {
        $order = Order::factory()->definition();

        $response = $this->post('/api/orders', $order);

        $response->assertStatus(201);
    }

    /**
     * Test can show show one item
     */
    public function test_order_update(): void
    {
        Order::factory()->count(1)->create();
        $order = Order::query()->first()->toArray();
        $order['name'] = 'Test';

        $putResponse = $this->put('/api/orders/' . $order['id'], $order);
        $getResponse = $this->get('/api/orders/' . $order['id']);

        $putResponse->assertStatus(200);
        $getResponse->assertSee($order['name']);
    }
}
