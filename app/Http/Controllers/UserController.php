<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateeUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @param string $id
     * @return void
     */
    public function index(Request $request, bool $id)
    {
        if ($request->file('video')->isValid() && $request->file('video')->isFile()) {
            $request->file('video')->store('public/cars');
        }

        die();
        $request->file('video');
//        $request->flashOnly("price");
//        return $request->old("price");

//       return $request->except("users","price");
//       return $request->except("users");

        if ($request->has('price') && $request->missing("config")) {
            $request->merge(["config" => "allconfig"]);
            $request->mergeIfMissing(["os" => "kali"]);
            return $request;
        }

        return 'false';
//        $arr0 = array(["ali", "reza", "mohsen"]);
//        $arr1 = array(["id" => "1", "name" => "mohsen"]);
//        $arr2 = collect([["id" => "1", "name" => "reza"],["id" => "2", "name" => "ali"]]);

//        $arr2->each(function ($user ){
//            echo $user["name"]."<br>";
//        });

//        $arr2->each(function ($user) {
//            echo $user . "<br>";
//        });


//        $request->collect('users')->each(function ($user) {
//            echo $user['name']."<br>";
//        });

//        $request->getAcceptableContentTypes();
//        dd($request->accepts(['application/json','text/html']));
//        dd($request->prefers(['application/json','text/html']));
//        dd($request->expectsJson());
//        dd($request->input('lastname.data.data-detail'));//post method
//        dd($request->query('name'));//get method


//        if ($request->isMethod('get') && $request->is('test/*')) {
//            echo 'host is :' . $request->host() . '<br>';
//            echo 'http host is :' . $request->httpHost() . '<br>';
//            echo 'schema is :' . $request->schemeAndHttpHost() . '<br>';
//            echo 'full url is :' . $request->fullUrl() . '<br>';
//            echo 'headers : is ' . '<br>';
//        }

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
    public function show()
    {

        return response()->caps('foo');
//        return response()->file(public_path('storage/ReferenceCard.pdf'));
//        return response()->download(public_path('storage/ReferenceCard.pdf'));
//        return response()->json([
//            'name' => 'Abigail',
//            'state' => 'CA',
//        ])->withCallback();

//        return redirect('/')->with('session flashee', 'hellow mohammad');
//        return to_route('welcome');
//        return redirect()->route('welcome');
//        return redirect()->route('welcome', [ 'id' => 1 ]);
//        return back()->withInput();
//        return redirect()->action(
//            [UserController::class, 'create'], ['id' => 1]
//        );
//        return redirect()->away('https://www.google.com');


        return response("hello ", 200)
            ->header('Content-Type', 'application/xml')
            ->cookie('name', 'valuye', 2);
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
