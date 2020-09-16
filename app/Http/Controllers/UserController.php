<?php

namespace App\Http\Controllers;

use App\Mail\VerificationEmail;
use App\Setting;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|max:32',
                'email' => 'email|required|max:96|unique:users,email',
                'phone' => 'required',
                'role' => 'required',
                'password' => 'required',
            ]
        );

        $file_name = '';

        if ($request->hasFile('image')) {

            $photo = $request->file('image');
            $file_name = uniqid('photo_', true) . date('ymdms') . '.' . $photo
                    ->getClientOriginalName();
            $photo->storeAs('user', $file_name);
        }

        $data = [
            'password' => Hash::make($request->input('password')),
            'name' => $request->input('name'),
            'role' => $request->input('role'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'image' => $file_name,
        ];

        $user = User::create($data);

        Toastr::success('User Registration Successful.', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        try {
            if (auth()->attempt($credentials)) {
                if (\auth()->user()->email_verified==0){
                    \auth()->logout();
                    Toastr::error("Please verify your account !", 'error', ["positionClass" => "toast-top-right"]);
                    return redirect()->back();
                }
                Toastr::success('Login Successful', 'success', ["positionClass" => "toast-top-right"]);
                return redirect()->intended(route('admin.dashboard'));

            } else {
                Toastr::error("Invalid Credentials !", 'error', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        } catch (\Exception $e) {
            Toastr::error($e->getMessage(), 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    public function logout()
    {
        auth()->logout();
        Toastr::success('Logged out successfully.', 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(),
            [
                'name' => 'required|max:32',
                'email' => 'email|required|max:96|unique:users,email',
                'password' => 'required',
                'shopName' => 'required',
                'shopAddress' => 'required',
                'shopEmail' => 'required',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $data = [
                'password' => Hash::make($request->input('password')),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'role' => 'org',
                'email_verification_token' => Str::random(32),
            ];

            DB::beginTransaction();
            $user = User::create($data);
            $shopData = [
                'user_id' => $user->id,
                'name' => $request->input('shopName'),
                'address' => $request->input('shopAddress'),
                'email' => $request->input('shopEmail'),
            ];
            Setting::create($shopData);
            Mail::to($user->email)->queue(new VerificationEmail($user));
            DB::commit();
            $credentials = [
                'email' => $user->email,
                'password' => $request->input('password'),
            ];
            Mail::to($user->email)->queue(new VerificationEmail($user));
            Toastr::success('Registration Successful. Please verify your account !', 'success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');

        } catch (\Exception $e) {
            DB::rollBack();
            Toastr::error($e->getMessage(), 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
    }

    public function verifyEmail($token = null)
    {
        if ($token === null) {
            Toastr::error("Invalid", 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }

        $user = User::where('email_verification_token', $token)->first();
        if ($user === null) {
            Toastr::error('Invalid', 'error', ["positionClass" => "toast-top-right"]);
            return redirect()->route('login');
        }
        $user->update([
            'email_verified' => 1,
            'email_verified_at' => Carbon::now(),
            'email_verification_token' => null,
        ]);

        Toastr::success("Account has been verified", 'success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('login');
    }

}
