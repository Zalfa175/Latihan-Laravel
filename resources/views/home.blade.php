@extends('template.index')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <h2 class="text-center mb-4">WELCOME TO OUR RESTAURANT</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="/nasi goreng.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nasi Goreng</h5>
                          <p class="card-text">Nasi Goreng yang membuat kenyang jika dimakan 6 porsi</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="/cookies.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Cookies</h5>
                          <p class="card-text">Cookies yang manis seperti yang membuat web</p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="/onion.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Onion Rings</h5>
                          <p class="card-text">Bawang bukan sembarang bawang</p>
                        </div>
                      </div>
                    </div>
                  </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection