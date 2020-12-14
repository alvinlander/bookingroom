@extends('layouts.base')

@section('body')
<x-navbar></x-navbar>
<div class="jumbotron jumbotron-fluid">
    <div class="container mt-5 text-center">
      <h1 class="display-4">History Transaction</h1>
    </div>
</div>
<div class="container">
    <table id="example" class="table table-striped table-bordered" >
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Booking</th>
                <th scope="col">Booking Date</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Romm Name</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Print E-Ticket</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->uuid }}</td>
                    <td>{{ $item->rent_date }}</td>
                    <td>{{ $item->rent_time_start }}</td>
                    <td>{{ $item->rent_time_end }}</td>
                    <td>{{ $item->room->nama }}</td>
                    <td><?= $item->desc ?></td>
                    <td>{{ $item->status}}</td>
                    <td>
                        <form action="{{ route('history.eticket',$item->uuid) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-warning">E-Ticket</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
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
