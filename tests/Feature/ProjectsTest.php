<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_create_project()
    {
        $this->withoutExceptionHandling();
        $data = [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];
        $this->post('/projects', $data)->assertRedirect('/projects');
        $this->assertDatabaseHas('projects', $data);

        $this->get('/projects')->assertSee($data['title']);
    }
}
