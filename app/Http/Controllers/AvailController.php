<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Order;
use Illuminate\Http\Request;

class AvailController extends Controller
{
    public function index($check = null){
        $data = Room::all();
        if($check){
            return view('avail')->with([
                'room'=>$data,
                'order'=>$check
            ]);
        }
        return view('avail')->with([
            'room'=>$data,
            'order'=>null
        ]);
    }
    public function checkavail(Request $request){
        $data = $request->validate([
            'rent_date' => 'required',
            'room_id' => 'required'
        ]);
        $check = Order::with('room')->where([
            'rent_date'=>$data['rent_date'],
            'room_id'=>$data['room_id']
            ])->get();
        // dd($check);
        return $this->index($check);
    }
}
