<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $setting = auth()->user()->setting;
        return view('admin.user.profile', compact('setting'));
    }

    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:96'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {
            auth()->user()->update([
                'name' => $request->input('name'),
            ]);
            Toastr::success("Profile Updated Successfully!", 'success', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        } catch (\Exception $e) {
            Toastr::error($e->getMessage(), 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    public function updatePassword(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'old_password' => 'required',
            'newPassword' => 'required|confirmed'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $credentials = [
            'email' => auth()->user()->email,
            'password' => $request->input('old_password')
        ];
        if (auth()->attempt($credentials)) {
            auth()->user()->update([
                'password' => Hash::make($request->input('newPassword'))
            ]);
            auth()->logout();
            Toastr::success('User Password Updated successfully', 'User', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }

        Toastr::warning('Invalid Old Password', 'User', ["positionClass" => "toast-top-right"]);
        return redirect()->back();


    }
}
