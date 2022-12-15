<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'university_name' => ['required', 'string', 'max:255'],
           // 'university_id' => ['required', 'string', 'max:255'],
            'depertment' => ['string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'area_of_interest' => ['required', 'string', 'max:255'],
            'image' =>[],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $path = "";
        if($request->hasFile('image')){
           // dd($request);
            $file = $request->file('image');
            $takeFile = $file->getClientOriginalName();
            $trimed = str_replace(" ","-",$takeFile);
            $filename = pathinfo($trimed,PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $fileNameToStore1 = $filename.'.'.$extension;
            $path = $file->storeAs("public/profile",$fileNameToStore1);
        }
       //dd($request->university_id);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'university_name' => $request->university_name,
            'university_id' => $request->university_id,
            'depertment' => $request->depertment,
            'phone_number' => $request->phone_number,
            'area_of_interest' => $request->area_of_interest,
            'image' => $path,
            'status' => 1,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
