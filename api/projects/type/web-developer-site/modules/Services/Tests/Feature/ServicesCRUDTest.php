<?php

namespace App\Modules\Services\Tests\Feature;

use App\Modules\AboutMe\Models\AboutMe;
use App\Modules\Services\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServicesCRUDTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test can show all items
     */
    public function test_services_index(): void
    {
        Service::factory()->count(1)->create();

        $response = $this->get('/api/services');

        $response->assertStatus(200);
    }

    /**
     * Test can show show one item
     */
    public function test_services_show(): void
    {
        Service::factory()->count(1)->create();

        $services = Service::query()->first();

        $response = $this->get('/api/services/' . $services->id);

        $response->assertStatus(200);
    }


    /**
     * Test can show show one item
     */
    public function test_services_store(): void
    {
        $services = Service::factory()->definition();

        $response = $this->post('/api/services/', $services);

        $response->assertStatus(201);
    }

    /**
     * Test can show show one item
     */
    public function test_services_update(): void
    {
        Service::factory()->count(1)->create();
        $services = Service::query()->first()->toArray();
        $services['title'] = 'Test';

        $putResponse = $this->put('/api/services/' . $services['id'], $services);
        $getResponse = $this->get('/api/services/' . $services['id']);

        $putResponse->assertStatus(200);
        $getResponse->assertSee($services['title']);
    }
}
