<?php

namespace Tests\Feature;

use App\Appointment;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppointmentFormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function it_display_the_form()
    {
        $response = $this->get('/appointment/create');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function it_display_the_last_appointment()
    {
        $appointment = Appointment::create([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'appointment' => Carbon::now(),
        ]);

        $response = $this->get('/appointment/' . $appointment->id);

        $response->assertStatus(200);
        $response->assertSee($appointment->name);
    }

    /**
     * @test
     */
    public function it_can_post_an_appointment()
    {
        $response = $this->post('/appointment', [
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'appointment' => Carbon::now(),
        ]);

        $response->assertStatus(302);
        $this->assertDatabaseHas('appointments', ['name' => 'John Doe']);
    }
}
