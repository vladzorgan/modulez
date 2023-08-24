<?php

namespace App\Modules\AboutMe\Tests\Feature;

use App\Modules\AboutMe\Models\AboutMe;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AboutMeCRUDTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test can show all items
     */
    public function test_about_me_index(): void
    {
        AboutMe::factory()->count(1)->create();

        $response = $this->get('/api/about-me');

        $response->assertStatus(200);
    }

    /**
     * Test can show show one item
     */
    public function test_about_me_show(): void
    {
        AboutMe::factory()->count(1)->create();

        $aboutMe = AboutMe::query()->first();

        $response = $this->get('/api/about-me/' . $aboutMe->id);

        $response->assertStatus(200);
    }


    /**
     * Test can show show one item
     */
    public function test_about_me_store(): void
    {
        $aboutMe = AboutMe::factory()->definition();

        $response = $this->post('/api/about-me/', $aboutMe);

        $response->assertStatus(201);
    }

    /**
     * Test can show show one item
     */
    public function test_about_me_update(): void
    {
        AboutMe::factory()->count(1)->create();
        $aboutMe = AboutMe::query()->first()->toArray();
        $aboutMe['first_name'] = 'Test';

        $putResponse = $this->put('/api/about-me/' . $aboutMe['id'], $aboutMe);
        $getResponse = $this->get('/api/about-me/' . $aboutMe['id']);

        $putResponse->assertStatus(200);
        $getResponse->assertSee($aboutMe['first_name']);
    }
}
