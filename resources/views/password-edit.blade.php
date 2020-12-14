@extends('layouts.base')

@section('body')
<x-navbar></x-navbar>
<div class="jumbotron">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 ">
                @if (session('status'))
                <div class="alert alert-success">
                    <span>{{ session('status') }}</span>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Update Password</div>
                    <div class="card-body">
                        <form action="{{ route('password.edit') }}" method="post" novalidate>
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="current_password">Current Passowrd</label>
                                <input type="password" name="current_password" id="current_password"
                                    class="form-control @error('current_password') is-invalid @enderror" required>
                                @error('current_password')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Re-Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
