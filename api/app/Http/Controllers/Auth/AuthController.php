<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);

        if( $validator->fails() )
        {
            return $this->errorResponse('Validation error.', $validator->errors()->all());
        }

        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        $success ['name'] = $user->name;
        $success ['token'] = $user->createToken('apiToken')->plainTextToken;
        return $this->successResponse($success, 'User register successfully.');
    }

    /**
     * login
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        $request['password'] = Hash::make($request->password);
        if ( Auth::attempt( [ 'email' => $request->email, 'password' => $request->password]))
        {
            $user = Auth::user();
            $user['token'] = $user->createToken('apiToken')->plainTextToken;
            return $this->successResponse($user, 'User login successfully.');
        }
        else
        {
            return $this->errorResponse('Unauthorised.', ['error' => 'Unauthorised.']);
        }
    }
}
