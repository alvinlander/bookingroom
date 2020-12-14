@extends('layouts.base')

@section('body')
    <x-navbar></x-navbar>
    <div class="jumbotron jumbotron-fluid">
        <div class="container mt-5 text-center">
          <h1>Selamat Datang di Tel-U Booking Room</h1>
        </div>
      </div>

      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ url('storage/staticassets/ikea-1.jpg') }}"  width="200" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Ruang Diskusi</h3>
                <p>Ruangan ini menyediakan meja dan kursi yang dapat digunakan untuk kegiatan diskusi.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ url('storage/staticassets/ikea-1.jpg') }}" width="200" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Ruang Santai</h3>
                <p>Ruangan ini menyediakan tempat yang luas dan tersedia pula cafetaria.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ url('storage/staticassets/ikea-1.jpg') }}" width="200" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h3>Ruang Komputer</h3>
                <p>Ruangan ini menyediakan komputer dan internet yang bebas digunakan.</p>
              </div>
            </div>


          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>


      <div class="container mt-5 mb-5">
          <div class="row">
              <div class="col text-center">
                  <h1>Booking Now</h1>
              </div>
          </div>

            <div class="row mt-5">
              <div class="col-md">
                  <div class="card text-center">
                    <img src="{{ url('storage/staticassets/icon1.png') }}" alt="Card image cap" height="215" class="rounded-circle">
                    <div class="card-body">
                      <h5 class="card-title">Booking Room</h5>
                      <a href="#" class="btn btn-primary btn-block rounded-pill">Pilih</a>
                    </div>
                  </div>
              </div>

              <div class="col-md">
                  <div class="card text-center">
                    <img src="{{ url('storage/staticassets/icon2.png') }}" alt="Card image cap" height="215" class="rounded-circle">
                    <div class="card-body">
                      <h5 class="card-title">Availability Room</h5>
                      <a href="{{ route('availbility') }}" class="btn btn-primary btn-block rounded-pill">Pilih</a>
                    </div>
                  </div>
              </div>

              <div class="col-md">
                  <div class="card text-center">
                    <img src="{{ url('storage/staticassets/icon3.png') }}" alt="Card image cap" height="215" class="rounded-circle">
                    <div class="card-body">
                      <h5 class="card-title">History Transaction</h5>
                      <a href="{{ route('history') }}" class="btn btn-primary btn-block rounded-pill">Pilih</a>
                    </div>
                  </div>
              </div>
            </div>
      </div>
@endsection


