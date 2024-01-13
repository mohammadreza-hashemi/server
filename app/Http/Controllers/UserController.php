<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateeUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

//        session(['key' => 'value']);
//        session()->put('key1', 'value1');
//        session()->regenerate();
//        session()->put('key2','value2');
//        session()->put('key3','value3');
//        $request->session()->regenerate();
//        $request->session()->invalidate();
//        session()->decrement('count', 2);
//        session()->increment('count', 5);
//        session()->flash('alarm','hello');


        return session()->all();
        return 'show all users';
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
        return $request;
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
