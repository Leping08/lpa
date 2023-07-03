<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * @return void
     * @test
     */
    public function test_the_home_page_loads(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
    }

    /**
     * @return void
     * @test
     */
    public function test_the_service_page_loads(): void
    {
        $response = $this->get(route('services'));

        $response->assertStatus(200);
    }

    /**
     * @return void
     * @test
     */
    public function test_the_contact_page_loads(): void
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
    }

    /**
     * @return void
     * @test
     */
    public function test_the_about_page_loads(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
    }
}
