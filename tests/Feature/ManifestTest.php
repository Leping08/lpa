<?php

namespace Tests\Feature;

use Tests\TestCase;

class ManifestTest extends TestCase
{
    public function test_the_web_manifest_loads(): void
    {
        $response = $this->get(route('manifest'));

        $response->assertStatus(200)
            ->assertHeader('Content-Type', 'application/manifest+json')
            ->assertJsonPath('name', 'Land Planning Associates Inc.')
            ->assertJsonPath('icons.0.src', asset('favicons/android-chrome-192x192.png'));
    }

    public function test_the_layout_links_to_the_web_manifest(): void
    {
        $this->get(route('home'))
            ->assertSee('<link rel="manifest" href="'.route('manifest').'">', false);
    }
}
