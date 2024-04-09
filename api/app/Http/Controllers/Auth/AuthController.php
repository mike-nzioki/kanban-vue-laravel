<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    /**
     * Register
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);

        if( $validator->fails() )
        {
            return $this->errorResponse('Validation error.', $validator->errors());
        }

        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());
        $success ['name'] = $user->name;
        $success ['token'] = $user->createToken('trello')->plainTextToken;
        return $this->successResponse($success, 'User register successfully.');
    }

    public function login(Request $request)
    {

    }
}
