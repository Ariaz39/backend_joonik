<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocationTest extends TestCase
{
    public function test_list_of_locations_requires_api_key()
    {
        $response = $this->getJson('/api/locations');
        $response->assertStatus(401);
    }

    public function test_list_of_locations_with_valid_api_key()
    {
        $response = $this->getJson('/api/locations', [
            'Authorization' => 'Bearer ' . config('services.api_key'),
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => ['code', 'name', 'image', 'creationDate']
            ]);
    }
}
