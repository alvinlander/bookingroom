<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index(){
        $room = Room::all();
        return view('booking')->with('room',$room);
    }

    public function book(Request $request){
        $mytime = Carbon::now();
        $data = $request->validate([
            'room_id' => 'required',
            'rent_date' => 'required|date',
            'rent_time_start' => 'required',
            'rent_time_end' => 'required',
            'desc' => 'required'
        ]);
        if($data['rent_date'] < $mytime->toDateString()){
            return back()->with('error','Date is invalid, today is '.$mytime->toDateString().' and input is '.$data['rent_date']);
        }
        if($data['rent_time_start'] > $data['rent_time_end']){
            return back()->with('error','Wrong Input Time');
        }
        $check = Order::where([
            'room_id' => $data['room_id'],
            'rent_date'=>$data['rent_date'],
        ])->get();
        if($check != null){
            foreach($check as $item){
                if($item->rent_time_start < $data['rent_time_start'] && $data['rent_time_start'] > $item->rent_time_end){
                    return back()->with('error','The room has been booked');
                }
            }
        }
        $data['uuid'] = 'RENT'.mt_rand(10000,99999);
        $data['status'] = 'Menunggu Persetujuan';
        $data['user_id'] = Auth::user()->id;
        Order::create($data);
        return back()->with('status','The Room successfully booked');
    }
}
