@extends('layout.app')

@section('title')
Product
@endsection

@section('content')
  <div class="container-fluid banner-section">
    <div class="banner-container-order">
      <div class="background-image-order">
        <img src="{{ asset('assets/img/background1.jpeg') }}" class="image-banner-order">
      </div>
      <div class="layer-background-order">
        <div class="d-flex h-100 flex-column align-items-center justify-content-center">
          <div class="banner-icon-img">
            <img src="{{ asset('assets/img/uksw.png') }}" alt="UKSW" class="icon-img">
            <img src="{{ asset('assets/img/fti.png') }}" alt="FTI" class="icon-img">
            <img src="{{ asset('assets/img/lk.png') }}" alt="LK" class="icon-img">
          </div>
          <div class="banner-title">
            <h2 class="banner-title-text">Menu</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Menu -->
  <div class="container ">
    <!-- <div class="bg-white order shadow"> -->
        <!-- Menu Makanan -->
        <h5 class="nama-menu mt-5 mx-5">Menu Makanan</h5>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-sm-1 g-4 mx-4 mb-5">
            @foreach ($foods as $food)
                <div class="col">
                    <div class="card h-100 ">
                        <img src="assets/img/{{ $food->image }}" class="card-img-top card-gambar-produk p-3" alt="{{ $food->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $food->name }}</h5>
                            <p class="card-text-description">{{ $food->excerpt }}</p>
                            <p class="card-text-description-stroke text-secondary"><?php $harga_lama = number_format($food->old_price,0,"","."); echo 'Harga Lama : Rp. '.$harga_lama; ?></p>
                            <p class="card-text">Harga : <span class="text-primary"><?php $harga = number_format($food->price,0,"","."); echo 'Rp. '.$harga; ?><span></p>
                            <a href="/order/{{ $food->slug }}" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Menu Makanan -->

        <!-- Menu Minuman -->
        <h5 class="nama-menu mt-5 mx-5">Menu Minuman</h5>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 row-cols-sm-1 g-4 mx-4 mb-5">
            @foreach ($drinks as $drink)
                <div class="col">
                    <div class="card h-100 ">
                        <img src="assets/img/{{ $drink->image }}" class="card-img-top card-gambar-produk p-3" alt="{{ $drink->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $drink->name }}</h5>
                            <p class="card-text-description">{{ $drink->excerpt }}</p>
                            <p class="card-text-description-stroke text-secondary"><?php $harga_lama = number_format($drink->old_price,0,"","."); echo 'Harga Lama : Rp. ' . $harga_lama; ?></p>
                            <p class="card-text">Harga : <span class="text-primary"><?php $harga = number_format($drink->price,0,"","."); echo 'Rp. '.$harga; ?><span></p>
                            <a href="/order/{{ $drink->slug }}" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Menu Minuman -->
    <!-- </div> -->
  </div>
  @endsection
