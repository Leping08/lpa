<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SitemapTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function test_the_site_map_page_loads()
    {
        // Testing
        $response = $this->get(route('sitemap'));

        $response->assertStatus(302);

        // @todo make sure contents are xml
    }
}
