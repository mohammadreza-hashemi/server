<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function activeUsers()
    {
        return 'active users are : ';
    }

    public function test()
    {
        return to_route('panel.users');
    }
}
