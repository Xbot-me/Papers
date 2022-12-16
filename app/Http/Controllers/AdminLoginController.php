<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\COntrollers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginPage()
    {
        if(auth()->guard('web')->user()){
            return redirect()->back();
        }else{
        return view('auth.admin-login');

        }
    }

    public function login(Request $request)
    {

        $cred = $request->only('email','password');
      //  \DB::enableQueryLog();

       // dd(auth()->guard('web'));
      // dd(auth()->guard('admin')->attempt($cred),\DB::getQueryLog());

      if(auth()->guard('admin')->attempt($cred)){

       // dd();
        return redirect()->intended(route('admin.dashboard'));
    }
    return redirect()->back();
        // \DB::enableQueryLog();
        // dd(auth()->guard('admin')->attempt(['email'=> $request->email,'password'=> $request->password]),\DB::getQueryLog());

        // if(auth()->guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
        //     return redirect()->intended(route('admin.dashboard'));
        // }
        // return redirect()->back();
    }
    public function showDashboard()
    {
        $user = auth()->guard('admin')->user();
        //Session::get($user);
        return view('admin.dashboard')->with('user',$user);
    }
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
