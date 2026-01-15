<?php

namespace Tests\Unit;

use App\Models\Appointment;
use PHPUnit\Framework\TestCase;

class AppointmentModelTest extends TestCase
{

    //Test that an Appointment model has the correct fillable fields.
    public function test_appointment_has_fillable_fields(): void
    {
        $appointment = new Appointment();

        //Get the fillable fields from the model
        $fillable = $appointment->getFillable();

        //All expected fields are fillable
        $this->assertContains('name', $fillable);
        $this->assertContains('email', $fillable);
        $this->assertContains('phone', $fillable);
        $this->assertContains('date', $fillable);
        $this->assertContains('time', $fillable);
        $this->assertContains('message', $fillable);


        $this->assertCount(6, $fillable);
    }
}
