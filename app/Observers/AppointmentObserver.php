<?php

namespace App\Observers;

use App\Appointment;
use App\Mail\AppointmentConfirmation;
use Illuminate\Support\Facades\Mail;

class AppointmentObserver
{
    /**
     * Handle the appointement "created" event.
     *
     * @param  \App\Appointment  $appointment
     * @return void
     */
    public function created(Appointment $appointment)
    {
        Mail::queue(new AppointmentConfirmation($appointment));
    }

}
