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

        // Check if selected time is in the past for today's date
        if ($this->date === date('Y-m-d')) {
            $selectedDateTime = strtotime($this->date . ' ' . $this->time);
            $currentDateTime = time();

            if ($selectedDateTime <= $currentDateTime) {
                $this->addError('time', 'The selected time has already passed. Please choose a future time slot.');
                return;
            }
        }

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
        $allHours =  [
            '09:00', '10:00', '11:00', '12:00',
            '13:00', '14:00', '15:00', '16:00', '17:00'
        ];

        $bookedHours = [];
        if ($this->date) {
            $bookedHours = $this->getBookedHoursForDate($this->date);
        }

        return array_diff($allHours, $bookedHours);
    }

    public function getBookedHoursForDate($date) {
        return Appointment::where('date', $date)->pluck('time')->toArray();
    }

    public function render() {
        return view('livewire.appointment-booking',
            ['availableHours' => $this->getAvailableHours()]);
    }
}
