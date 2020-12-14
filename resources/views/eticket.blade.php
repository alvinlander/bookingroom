@extends('layouts.base')

@section('body')

<div class="container mt-3 mb-5 mt-5" >
    <div class="card card-4" style="background-color: #192a56">
      <div class="card-body">
        <div class="row">
            <div class="col text-center" style="color: #feca57">
                <img src="{{ url('storage/Logo.png') }}" alt="" width="300">
            </div>
        </div>
        <div class="row text-center" >
            <div class="col-md">
                <div class="card" style="background-color: #feca57">
                  <div class="card-body">
                    <h5 class="card-text">Rent Date</h5>
                  </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="background-color: #feca57">
                  <div class="card-body">
                    <h5 class="card-text">Room Name</h5>
                  </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md">
                <div class="card" style="background-color: #feca57">
                  <div class="card-body">
                    <p class="card-text">{{ $items[0]->rent_date }}</p>
                  </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="background-color: #feca57">
                  <div class="card-body">
                    <p class="card-text">{{ $items[0]->room->nama }}</p>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="container" style="background-color: #feca57">
      <div class="card-body">
          <div class="row text-center">
              <div class="col">
                  <h5>Id Booking</h5>
              </div>
              <div class="col">
                  <h5>Start Time</h5>
              </div>
              <div class="col">
                  <h5>End Time</h5>
              </div>
              <div class="col">
                  <h5>Status</h5>
              </div>
          </div>

          <div class="row text-center">
              <div class="col">
                  <p>{{ $items[0]->uuid }}</p>
              </div>
              <div class="col">
                  <p>{{ $items[0]->rent_time_start }}</p>
              </div>
              <div class="col">
                  <p>{{ $items[0]->rent_time_end }}</p>
              </div>
              <div class="col">
                  <p>{{ $items[0]->status }}</p>
              </div>
          </div>

          <div class="row text-center">
              <div class="col mt-5">
                  <h5>Terima kasih telah memesan ruangan di Tel-U Booking Room</h5>
              </div>
          </div>
      </div>
    </div>

    <div class="container mt-3">
        <a href="/" class="btn btn-info">Back</a>
    </div>
@endsection
