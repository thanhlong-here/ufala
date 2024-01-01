<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function pass()
    {
        return view('auth.pass');
    } 

    public function firebase(Request $request)
    {
        $validate = Validator::make($request->input(), [
            'firebase_uid'    => 'required|string|min:3',
            'firebase_token'  => 'required',
            'email'  => ['required', 'string', 'email', 'max:191'],
        ]);
     
        if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
        }

        $user = User::whereEmail($request->email)->firstOr(function () use ($request) {
            $name = empty($request->name) ? $request->email : $request->name;
            $pass = $this->data['password'] = Hash::make(Str::random(24));
            return User::create([
                'name' => $name,
                'email' =>  $request->email,
                'password' => $pass,
                'firebase_uid'    => $request->firebase_uid,
                'firebase_token'    => $request->firebase_token,

            ]);
        });
        Auth::loginUsingId($user->id);
        return $this->authenticated($request, $user);
    }


    protected function authenticated(Request $request, $user)
    {
        $user->update(['login_at' => now()]);
       
        if ($request->_redirect)
            return redirect($request->_redirect)->with([
                'status' => 'success', 'message' => __('Đăng nhập thành công')
            ]);
      
        return view('auth.pass');
    }

    public function checkEmail(Request $request)
    {
        $validator   = Validator::make($request->input(), [
            'email' => ['required', 'string', 'email', 'max:191'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if (User::whereEmail($request->email)->exists()) {
            return redirect()->route('pass', ['email' => $request->email]);
        }

        return redirect()->route('register', ['email' => $request->email]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
