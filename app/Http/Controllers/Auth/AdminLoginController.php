<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\COntrollers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    
    public function showLoginPage()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' =>'required|email',
            'password'=>'required|min:8'
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->passowrd],$request->remember)){
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back();
    }
}