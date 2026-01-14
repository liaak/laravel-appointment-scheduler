<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        $appointments = Appointment::all();
        return view('admin.dashboard', compact('appointments'));
    }

    public function getAppointment($id)
    {
        $appointment = Appointment::findOrFail($id);
        return response()->json($appointment);
    }

    public function updateAppointment(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'nullable|string'
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update($validated);

        return response()->json([
            'success' => true,
            'appointment' => $appointment
        ]);
    }

    public function deleteAppointment($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return response()->json(['success' => true]);
    }
}

