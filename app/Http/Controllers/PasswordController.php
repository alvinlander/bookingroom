<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Http\Request;

class PasswordController extends UpdateUserPassword
{
    public function index(){
        return view('password-edit');
    }

    public function edit()
    {
        $this->update(request()->user(), request()->all());
        return back()->with('status', 'Password telah terupdate');
    }
}
