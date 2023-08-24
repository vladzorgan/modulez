<?php

namespace App\Modules\Portfolio\Tests\Feature;

use App\Modules\AboutMe\Models\AboutMe;
use App\Modules\Portfolio\Models\PortfolioWork;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioWorkCRUDTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test can show all items
     */
    public function test_portfolio_work_index(): void
    {
        PortfolioWork::factory()->count(1)->create();

        $response = $this->get('/api/portfolio/works');

        $response->assertStatus(200);
    }

    /**
     * Test can show show one item
     */
    public function test_portfolio_work_show(): void
    {
        PortfolioWork::factory()->count(1)->create();

        $portfolioWork = PortfolioWork::query()->first();

        $response = $this->get('/api/portfolio/works/' . $portfolioWork->id);

        $response->assertStatus(200);
    }


    /**
     * Test can show show one item
     */
    public function test_portfolio_work_store(): void
    {
        $portfolioWork = PortfolioWork::factory()->definition();

        $response = $this->post('/api/portfolio/works/', $portfolioWork);

        $response->assertStatus(201);
    }

    /**
     * Test can show show one item
     */
    public function test_portfolio_work_update(): void
    {
        PortfolioWork::factory()->count(1)->create();
        $portfolioWork = PortfolioWork::query()->first()->toArray();
        $portfolioWork['title'] = 'Test';

        $putResponse = $this->put('/api/portfolio/works/' . $portfolioWork['id'], $portfolioWork);
        $getResponse = $this->get('/api/portfolio/works/' . $portfolioWork['id']);

        $putResponse->assertStatus(200);
        //$getResponse->assertSee($portfolioWork['title']);
    }
}
