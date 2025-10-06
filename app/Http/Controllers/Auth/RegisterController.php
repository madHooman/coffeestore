<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function action(Request $request)
    {

$validator =Validator::make($request->all(), [
    'name' => 'required|min:6',
    'email' => 'required|email|unique:users',
    'password' => 'required|min:6',
], [

]);


if ($validator->fails()) {
    Session::flash('error_message', ' متسافانه ارسال اطلاعات با خطا روبه رو شد');
//    return back();
    return redirect()->back()->withErrors($validator)->withInput();
}
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Session::flash('status','اطلاعات با موفقیت ثبت گردید');
        return Redirect::to('/dashboard');
    }
}

