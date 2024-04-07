<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class RegistrationController extends Controller
{
    public function postRegister(Request $request)
    {
        $name = $request->input('name');

        $getData = json_decode(Cookie::get("cat"));

        array_push($getData, $name);

        Cookie::queue("cat", json_encode($getData),  30);

        return redirect(route('register'));
    }
}
