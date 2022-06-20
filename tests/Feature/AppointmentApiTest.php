<?php

namespace Tests\Feature;

use App\Appointment;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppointmentApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_access_api_endpoint()
    {
        $response = $this->getJson('/api/appointment');

        $response->assertStatus(200);
    }
}
