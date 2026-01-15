<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        $query = Appointment::query();

        if ($request->has('date_from') && $request->date_from) {
            $query->where('date', '>=', $request->date_from);
        }

        if ($request->has('date_to') && $request->date_to) {
            $query->where('date', '<=', $request->date_to);
        }

        $appointments = $query->orderBy('date', 'asc')->orderBy('time', 'asc')->get();

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

