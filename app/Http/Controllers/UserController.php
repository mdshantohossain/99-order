<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkEmailAddressExist(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            return ['exists' => true];
        } else {
            return ['exists' => false];
        }
    }
}
