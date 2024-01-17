<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateeUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

//        $collection = collect(['ali', 'hasan', null])->map(function ($name) {
//            return strtoupper($name);
//        })->reject(function ($name) {
//            return empty($name);
//        });
//        return $users->avg('id');
//        return $users->chunk(2)->collapse()->collect();

//        $collection = collect(str_split('AABBCCCD'));
//        $chunks = $collection->chunkWhile(function ($value, $key, $chunk) {
//            return $value === $chunk->last();
//        });
//        return  $chunks->all();

//        $attribure = collect(['id', 'name', 'lastname']);
//        $values = collect([1, 'ali', 'hashemi']);
//        return $attribure->combine($values);

//        return collect('ali', 'hasan')->contains('ali');
//        return $users->contains('name', 'ali');


//        return User::pluck('email')->countBy(function ($email) {
//           return substr(strchr($email,"@") ,1);
//        });
//        return $users->dd();

//        return $users->pluck('name')->collect()->crossJoin(['a','b']);
//        return $users->diffAssoc($users);
//        return $users->diffKeys($users);
//        return $users->doesntContain('name','mostafa');

//        return $users->dump();

//        $employees = collect([
//            ['email' => 'abigail@example.com', 'position' => 'Developer'],
//            ['email' => 'james@example.com', 'position' => 'Designer'],
//            ['email' => 'victoria@example.com', 'position' => 'Developer'],
//        ]);
//
//      return  $employees->duplicates('position');

//        $users->each(function ($key, $value) {
//            Log::info($key['name']);
//        });

//        $users->each(function ($key) {
//            Log::info($key->only(['id']));
//        });

//        return $users->first(function ($value, $key) {
//            return $value['name'] === 'mostafa';
//        });
//        return $users->flatten();
//        return $users->get('name');
//        return $users->forPage(5,2);
//        return $users->groupBy('status');

//        return User::where('status','1')->get();
//        return $users->isNotEmpty();
//        return User::where('status', '1')->first();
//        return collect(['a', 'b', 'c'])->join('-');
//        return $users->keyBy('email')->keys();


//            return $users->mapToGroups(function ($item,$key) {
//                    return [$item['city'] => $item['name']];
//            });


//        return $users->mapWithKeys(function ($item, $key) {
//            return [$item['name'] => $item['email']];
//        });
        
//        return User::all(['name', 'email']);
//        return $users->pluck('name');

//        return $users->partition(function ($item, $value) {
//            return $item['city'] = "Borujerd";
//        });

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
