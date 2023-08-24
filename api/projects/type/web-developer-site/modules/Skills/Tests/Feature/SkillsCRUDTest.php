<?php

namespace App\Modules\Skills\Tests\Feature;

use App\Modules\AboutMe\Models\AboutMe;
use App\Modules\Skills\Models\Skill;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SkillsCRUDTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test can show all items
     */
    public function test_skills_index(): void
    {
        Skill::factory()->count(1)->create();

        $response = $this->get('/api/skills');

        $response->assertStatus(200);
    }

    /**
     * Test can show show one item
     */
    public function test_skills_show(): void
    {
        Skill::factory()->count(1)->create();

        $skill = Skill::query()->first();

        $response = $this->get('/api/skills/' . $skill->id);

        $response->assertStatus(200);
    }


    /**
     * Test can show show one item
     */
    public function test_skills_store(): void
    {
        $skill = Skill::factory()->definition();

        $response = $this->post('/api/skills/', $skill);

        $response->assertStatus(201);
    }

    /**
     * Test can show show one item
     */
    public function test_skills_update(): void
    {
        Skill::factory()->count(1)->create();
        $skill = Skill::query()->first()->toArray();
        $skill['title'] = 'Test';

        $putResponse = $this->put('/api/skills/' . $skill['id'], $skill);
        $getResponse = $this->get('/api/skills/' . $skill['id']);

        $putResponse->assertStatus(200);
        $getResponse->assertSee($skill['title']);
    }
}
