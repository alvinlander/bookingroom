@extends('layouts.base')

@section('body')
<x-navbar></x-navbar>
<div class="jumbotron jumbotron-fluid">
    <div class="container mt-5 text-center">
      <h1 class="display-4">Check Your Room</h1>
    </div>
</div>

  <div class="container">
      <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="card text-center">
                <div class="card-body">
                    <form action="{{ route('availbility') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Date</label>
                            <input type="date" id="rent_date" name="rent_date">
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Room Name</label>
                              <select class="form-select" name="room_id">
                                  <option selected>Select Room</option>
                                  @foreach ($room as $item)
                                  <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div style="text-align: right;">
                              <button type="submit" class="btn btn-primary">Find</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="result mt-4">
          <table id="example" class="table table-resposive">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Room Name</th>
                  <th scope="col">Rent Date</th>
                  <th scope="col">Start Time</th>
                  <th scope="col">End Time</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                  @if ($order)
                    @foreach ($order as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->room->nama}}</td>
                        <td>{{ $item->rent_date }}</td>
                        <td>{{ $item->rent_time_start }}</td>
                        <td>{{ $item->rent_time_end }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                    @endforeach
                  @endif


              </tbody>
          </table>
      </div>
    </div>

@endsection
@push('style')
<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
@endpush
@push('script')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endpush
