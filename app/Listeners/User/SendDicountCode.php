<?php

namespace App\Listeners\User;

use App\Events\User\BirthDay;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendDicountCode
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
        //
    }
}
