<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index()
    {
        $data = Order::with('room')
        ->where('user_id',Auth::user()->id)
        ->get();
        return view('history')->with('data',$data);
    }

    public function eticket($uuid)
    {
        $data = Order::with('room','user')
        ->where('uuid',$uuid)
        ->get();
        // dd($data);
        return view('eticket')->with('items',$data);
    }
}
