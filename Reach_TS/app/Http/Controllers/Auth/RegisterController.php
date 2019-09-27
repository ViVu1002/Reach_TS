<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\FontendController;
use Illuminate\Http\Request;
use App\Models\TinTuc;

class RegisterController extends FontendController
{

    public function getRegister()
    {
        $dangki = TinTuc::where('tt_loaitin_id',21)->get();
        return view('auth.register',compact('dangki'));
    }
    
    public function postRegister(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->date = $request->date;
        $user->nganh_hoc = $request->nganh_hoc;
        $user->co_so = $request->co_so;

        $user->save();

        if($user->id)
        {
            return redirect()->route('home');
        }

        return redirect()->back();
    }
}
