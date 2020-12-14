@extends('layouts.auth',['title'=>'Register'])

@section('content')
<div class="card">
    <div class="card-header">Register</div>
    <div class="card-body">
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror rounded-pill"
                    required>
                @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror rounded-pill"
                    required>
                @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror rounded-pill" required>
                @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Re-Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control rounded-pill"
                    required>
            </div>
            <button type="submit" class="btn btn-block btn-success rounded-pill">Register</button>
        </form>
        <div class="text-center mt-3">
            Already have an account ? <a href="/login" class="text-decoration-none">here.</a>
        </div>
    </div>
</div>
@endsection
