<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{

    use ResetsPasswords;

    protected $redirectTo = '/seguridad/login';

    public function __construct()
    {
        $this->middleware('guest');
    }
    
     protected function resetPassword($user, $password)
    {
        $this->setUserPassword($user, $password);

        $user->setRememberToken(Str::random(60));

        $user->save();
    }

    protected function setUserPassword($user, $password)
    {
        $user->password = $password;
    }
}
