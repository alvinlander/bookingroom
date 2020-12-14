@extends('layouts.base')

@section('body')
    <x-navbar></x-navbar>
    <div class="jumbotron jumbotron-fluid">
        <div class="container mt-5 text-center">
          <h1>Booking Room</h1>
        </div>
      </div>
    <div class="container">
      @if (session('status'))
            <div class="alert alert-success">
                <span>{{ session('status') }}</span>
            </div>
        @endif
      @if (session('error'))
            <div class="alert alert-danger">
                <span>{{ session('error') }}</span>
            </div>
        @endif
        <div class="row">
            @foreach ($room as $item)
                <div class="col-md-4 mt-3">
                    <div class="card h-100 w-100">
                        <img src="{{ url('storage/'.$item->img_room) }}" class="card-img-top" alt="{{ 'Room No.'.$loop->iteration }}" height="200">
                        <div class="card-body">
                            <h2 class="card-title">{{ $item->nama }}</h2>
                            <p class="card-text">{!! Str::limit($item->desc, 70, '...') !!}</p>
                            <p class="card-text">Kapasitas : {{ $item->capacity_min.'-'.$item->capacity_max.' orang' }}</p>
                            <div class="mt-3">
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{ $item->id }}">Booking Now !</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade mt-5" id="myModal{{ $item->id }}" role="dialog">
                    <div class="modal-dialog modal-lg container">
                      <div class="modal-content">
                        <div class="modal-header">
                            <span>Booking Now</span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="container modal-body">
                            <h5 class="text-center mb-2">Booking {{ $item->nama }}</h5>
                          <form action="{{ route('booking') }}" method="post">
                            @csrf
                            <input type="hidden" name="room_id" value="{{ $item->id }}">
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Date</label>
                              <div class="col-sm-10">
                                <input type="date" name="rent_date">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Start Time </label>
                              <div class="col-sm-10">
                                <input class="form-control" type="time" name="rent_time_start">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">End Time</label>
                              <div class="col-sm-10">
                                <input class="form-control" type="time" name="rent_time_end">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Purpose</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" rows="3" name="desc"></textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
