<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

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

    public function clear()
    {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('event:clear');
        return 'all of artisan cleared ! :)';
    }
}
