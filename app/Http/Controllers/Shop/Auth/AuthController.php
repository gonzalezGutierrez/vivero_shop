<?php

namespace App\Http\Controllers\Shop\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\Register\RegisterRequest;
use App\Repositories\Admin\Users\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{



    public function login_register_form()
    {
        return view('Shop.Pages.Auth.login_register');
    }

    public function register(RegisterRequest $request)
    {

        $userRepository = new UserRepository();

        $request['role_id'] = 3;

        $user = $userRepository->create($request->all());

        Auth::loginUsingId($user->id);

        return redirect('/');

    }

    public function login(Request $request)
    {

        $data = $request->only(['email_login','password_login']);

        $userRepository = new UserRepository();

        $user = $userRepository->find($data['email_login']);

    }
}
