<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('appointment.index');
    }

    public function create()
    {
        return view('appointment.create');
    }

    public function store(Request $request)
    {
        $appointment = Appointment::create($request->only([
            'name', 'phone', 'email', 'appointment', 'message'
        ]));

        return redirect(route('appointment.index'))->with('status', [
            'type' => 'success',
            'message' => 'Rendez-vous enregistré',
            'appointment' => $appointment->id,
        ]);
    }
}
