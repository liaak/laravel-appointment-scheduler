<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Appointment;

class AppointmentBooking extends Component
{
    public $name= '';
    public $email = '';
    public $phone = '';
    public $date = '';
    public $time = '';
    public $message = '';
    public $successMessage = '';

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email'=> 'required|email',
            'phone' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
        ]);

        Appointment::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'time' => $this->time,
            'message' => $this->message,
        ]);

        $this->successMessage = 'Appointment booked successfully! We will contact you soon.';
        $this->reset(['name', 'email', 'phone', 'date', 'time', 'message']);
    }

    public function getAvailableHours() {
        return [
            '09:00', '10:00', '11:00', '12:00',
            '13:00', '14:00', '15:00', '16:00', '17:00'
        ];
    }

    public function render() {
        return view('livewire.appointment-booking',
            ['availableHours' => $this->getAvailableHours()]);
    }
}
