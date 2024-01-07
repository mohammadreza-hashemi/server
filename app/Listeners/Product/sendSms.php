<?php

namespace App\Listeners\Product;

use App\Events\Products\ProductsOffer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendSms
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
    public function handle(ProductsOffer $event): void
    {
        //
    }
}
