<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateeUserRequest;
use App\Rules\PasswordRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
    public function store(Request $request)
    {

        $validator = \validator($request->all(), [
            "name" => "doesnt_start_with:mo|doesnt_end_with::ad|exists:users,name|exists:mysql.users,name|lowercase",
            'email' => 'required|unique:users|max:255|email:rfc,dns',
            'age' => 'required|between:1,2|gte:18',
            'accepted' => 'accepted',
            'accepted_if' => 'accepted_if:age, == , 22',
            'active_url' => 'active_url',
            'start_at' => 'required|date|date_format:Y-m-d|before_or_equal:end_at',
            'end_at' => 'required|date|date_format:Y-m-d|after:start_at',
            'username' => 'bail|different:name|alpha_num:ascii',
            'array' => "array:name",
            "price" => "decimal:2",
            "phone" => "bail|max_digits:11|digits:11|ends_with:98|starts_with:09",
            'avatar' => 'dimensions:min_width=100,min_height=200|extensions:jpg,png|file|image',
            "exclude" => "bail|present|filled",
            "user_id" => "exists:App\Models\User,id|integer",
            "json" => "nullable|json",
            'video' => 'mimetypes:video/avi,video/mpeg,video/quicktime',
            'photo' => 'bail|extensions:jpg,png|mimes:gif,jpeg|max:255',
            "postalcode" => 'bail|min_digits:5|max_digits:8',
            'prefix_phone' => 'bail|required|numeric|missing_unless:age,98',
//            "password" => new PasswordRule,
            "password" => Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised(),
//            "password" => "bail|required|min:6|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/",
            "confirm" => "bail|same:password",
            'tag' => 'bail|uppercase|min:3',
            "file" => File::image()->min(100)->max(250)

        ]);


//        $validator = Validator::make($request->all(), [
//            'email' => 'required|unique:users|max:255',
//            'age' => 'required',
//        ]);

        if ($validator->fails()) {
            return view('errors.validation')->with('errors', $validator->errors());
        }


//        return $request->all();
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
