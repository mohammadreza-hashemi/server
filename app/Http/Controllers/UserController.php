<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateeUserRequest;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
//            Admin::insert([
//                'name' => $request->name,
//                'city' => $request->city,
//                'email' => $request->email,
//                'status' => $request->status,
//                'password' => Hash::make($request->password)
//            ]);

            if (Auth::guard('web')
                ->attempt(['email' => $request->email, 'password' => $request->password], 1)) {
                return "you are logined successfully !";
            } else {
                return 'oops!';
            }

        } catch (\Exception $e) {
            return $e->getMessage();
        }


//

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'show create form ';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'user information';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'user edit form';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateeUserRequest $request, string $id)
    {
        return 'user update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'delete user';
    }
}
