<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        return 'message';
        config(['app.timezone' => 'America/Chicago']);
        env('GMAIL')
        . '_' . config('app.maintenance.driver')
        . '_' . App::environment();
        $details['name'] = 'علی صالح';
        $details['email'] = 'hi@obydul.me';

        dispatch(new \App\Jobs\SendWelcomEmailJob($details));
        dd('sent');
    }
}
