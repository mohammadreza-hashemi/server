<?php

namespace App\Http\Controllers;

use App\Events\User\BirthDay;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateeUserRequest;
use App\Models\User;
use App\Repositories\UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function index()
    {
        return view('users.index');
    }
}


