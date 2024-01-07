<?php

namespace App\Listeners\User;

use App\Events\User\BirthDay;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SmsHappyBirthDay
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BirthDay $event): void
    {
        Log::alert('happy birth day user :) !');
    }
}
