@extends('layouts.base')

@section('body')
    <x-navbar></x-navbar>

    <div class="jumbotron">
        <div class="container text-center mt-5">
            @if (session('status'))
            <div class="alert alert-success">
                <span>{{ session('status') }}</span>
            </div>
            @endif
          <img src="{{ url('storage/'.Auth::user()->avatar) }}" width="100" class="rounded-circle">
        </div>
    </div>
    <form class="container mb-5" action="{{ route('profile') }}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
        </div>
        </div>
        <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}">
        </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block rounded-pill">Submit</button>
    </form>

@endsection
