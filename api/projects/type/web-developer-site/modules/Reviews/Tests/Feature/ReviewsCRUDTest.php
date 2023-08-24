<?php

namespace App\Modules\Reviews\Tests\Feature;

use App\Modules\AboutMe\Models\AboutMe;
use App\Modules\Reviews\Models\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReviewsCRUDTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test can show all items
     */
    public function test_reviews_index(): void
    {
        Review::factory()->count(1)->create();

        $response = $this->get('/api/reviews');

        $response->assertStatus(200);
    }

    /**
     * Test can show show one item
     */
    public function test_reviews_show(): void
    {
        Review::factory()->count(1)->create();

        $reviews = Review::query()->first();

        $response = $this->get('/api/reviews/' . $reviews->id);

        $response->assertStatus(200);
    }


    /**
     * Test can show show one item
     */
    public function test_reviews_store(): void
    {
        $reviews = Review::factory()->definition();

        $response = $this->post('/api/reviews/', $reviews);

        $response->assertStatus(201);
    }

    /**
     * Test can show show one item
     */
    public function test_reviews_update(): void
    {
        Review::factory()->count(1)->create();
        $aboutMe = Review::query()->first()->toArray();
        $aboutMe['fio'] = 'Test';

        $putResponse = $this->put('/api/reviews/' . $aboutMe['id'], $aboutMe);
        $getResponse = $this->get('/api/reviews/' . $aboutMe['id']);

        $putResponse->assertStatus(200);
        $getResponse->assertSee($aboutMe['fio']);
    }
}
