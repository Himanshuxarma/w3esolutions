<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    protected $redirectTo = '/admin';
    protected $loginPath = '/admin/login';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    /**
     * Show the login form.
     * 
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
       
        return view('admin.auth.login',[
            'title' => 'Admin Login  - ' . config('app.name'),
            'loginRoute' => 'login',
            //'forgotPasswordRoute' => 'admin.password.request',
            
        ]);
        
    }

    /**
     * Login the admin.
     * 
     * @param \Illuminate\Http\Request $request 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request)
    {
       
        //dd($request);
        //$2y$10$OVDH5E8eUoSe5VUhQSLkenM.NKhSM778NhFosZhCDhij8O9deV8e
        $this->validator($request);
        if(Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
            
            //Check if authenticated user is admin only
            $user = Auth::guard('admin')->user();
            // if(!$user->hasRole('admin')){
            //     Auth::guard('admin')->logout();
            //     $request->session()->invalidate();
            //     return redirect()
            //             ->route('login')
            //             ->withErrors('You are Unauthorized to Login!');
            // }
            // dd($user);
            return redirect()->intended(route('adminDashboard'))->with('status','You are Logged in as Admin!');
        }

        //Authentication failed...
        return $this->loginFailed();
    }

    /**
     * Logout the admin.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()
            ->route('login')
            ->with('status','Admin has been logged out!');
    }

    /**
     * Validate the form data.
     * 
     * @param \Illuminate\Http\Request $request
     * @return 
     */
    private function validator(Request $request){
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:users|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];

        //validate the request.
        $request->validate($rules,$messages);
    }

    /**
     * Redirect back after a failed login.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    private function loginFailed()
    {
      return redirect()
            ->back()
            ->withInput()
            ->withErrors('Invalid Credentials, Login failed, please try again!');
    }
}