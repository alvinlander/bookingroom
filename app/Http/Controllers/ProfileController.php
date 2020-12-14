<?php

namespace App\Http\Controllers;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Http\Request;

class ProfileController extends UpdateUserProfileInformation
{
    public function index()
    {
        return view('profile');
    }
    public function updateProfile()
    {
        $this->update(request()->user(), request()->all());
        return back()->with('status', 'Profile telah terupdate');
    }
}
