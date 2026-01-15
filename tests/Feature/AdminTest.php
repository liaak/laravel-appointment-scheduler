<?php

namespace Tests\Feature;

use App\Models\Appointment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_dashboard_loads_successfully(): void
    {
        $response = $this->get('/admin');

        $response->assertStatus(200);
        $response->assertViewIs('admin.dashboard');
        $response->assertViewHas('appointments');
    }

    public function test_get_appointment_returns_json(): void
    {
        $appointment = Appointment::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '5555555555',
            'date' => '2026-01-25',
            'time' => '15:00',
            'message' => 'Test message'
        ]);

        $response = $this->get("/admin/appointments/{$appointment->id}");

        $response->assertStatus(200);
        $response->assertJson([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '5555555555',
        ]);
    }


    public function test_update_appointment_successfully(): void
    {
        $appointment = Appointment::create([
            'name' => 'Name',
            'email' => 'email@example.com',
            'phone' => '1234567890',
            'date' => '2026-01-20',
            'time' => '10:00',
            'message' => 'Message'
        ]);

        $response = $this->put("/admin/appointments/{$appointment->id}", [
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
            'phone' => '234567890',
            'date' => '2026-01-21',
            'time' => '11:00',
            'message' => 'Updated message'
        ]);

        $response->assertStatus(200);
        $response->assertJson(['success' => true]);

        $this->assertDatabaseHas('appointments', [
            'id' => $appointment->id,
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
            'phone' => '234567890',
            'date' => '2026-01-21',
            'time' => '11:00',
            'message' => 'Updated message'
        ]);
    }
}

