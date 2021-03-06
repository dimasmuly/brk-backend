@extends('layouts.frontend')

@section('content')
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Fasilitas</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layanan</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Fasilitas</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>Barista</h5>
                            <p>Untuk menyempurnakan resep tertentu dan mempelajari resep baru untuk melayani pelanggan mereka dengan baik dan mewakili perusahaan mereka</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-coffee text-primary mb-4"></i>
                            <h5>Produk Kami</h5>
                            <p>Sebagian besar kopi yang ada di restoran kami mulai menyajikan minuman espresso pada tahun 2014, menetapkan standar kedai kopi baru.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>Pesanan Online</h5>
                            <p> Salah satu cara termudah untuk mendapatkan pesanan Anda. Buka aplikasi, pesan dan bayar.
                                Kami akan memberi tahu Anda berapa
                                lama sampai pesanan Anda siap dan membiarkan Anda
                                menyimpan favorit Anda untuk waktu berikutnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>Melayani 24/7</h5>
                            <p>sistem 24/7 yaitu layanan dari CoffeeIn yang tersedia sepanjang waktu dan setiap hari
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Service End -->
@endsection
