<?php

namespace App\Http\Controllers;

use App\Mail\PasswordEmail;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        if (auth()->check()){
            return redirect()->intended(route('admin.dashboard'));
        }
        return view('auth.passwords.email');
    }

    public function sendEmail(Request $request)
    {
        // dd($request->all());
        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        if ($user) {
            $user->update(['email_verification_token' => str_random(32),]);
            Mail::to($user->email)->send(new PasswordEmail($user));
            Toastr::success("Password reset link will be sent to your email...!", 'success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        } else {
            Toastr::error("Email not found ...!", 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    public function show($token)
    {
        if ($token === null) {
            Toastr::error("Invalid!", 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }
        $user = User::where('email_verification_token', $token)->first();

        return view('auth.passwords.reset', compact('user','token'));
    }

    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'password' => 'required|confirmed'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $token = $request->input('email_verification_token');
        $user = User::where('email_verification_token', $token)->first();
        if ($user === null) {
            Toastr::error("Invalid!", 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }
        try {
            $user->update([
                'password' => Hash::make($request->input('password')),
                'email_verification_token' => null,
            ]);
            Toastr::success("Password reset successfully...!!", 'success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }catch (\Exception $exception){
            Toastr::error($exception->getMessage(), 'success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }



    }

}
