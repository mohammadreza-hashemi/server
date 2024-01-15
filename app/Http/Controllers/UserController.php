<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateeUserRequest;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use mysql_xdevapi\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $error = 'my error ';
            Log::alert($error);
            Log::critical($error);
            Log::error($error);
            Log::warning($error);
            Log::notice($error);
            Log::info($error, ['12']);
            Log::debug($error);
            Log::emergency($error);
            throw new \Exception($error);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

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
