<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
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

    public function store(StoreAppointmentRequest $request)
    {
        $appointment = Appointment::create($request->validated());

        return redirect(route('appointment.index'))->with('status', [
            'type' => 'success',
            'message' => 'Rendez-vous enregistré',
            'appointment' => $appointment->id,
        ]);
    }
}
