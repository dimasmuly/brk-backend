@extends('layouts.frontend')

@section('content')
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Pemesanan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layanan</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Pemesanan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
            </div>
            <div class="container-xxl position-relative p-0">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Ordering</h5>
                    <h1 class="mb-5">Pemesanan</h1>
                </div>
                <div class="container-xxl py-5 bg-dark hero-header mb-5">
                    <div class="container my-5 py-5">

                        <div class="row align-items-center g-5">
                            <div class="col-lg-6 text-center text-lg-start">
                                <h1 class="display-3 text-white animated slideInLeft">To make your happy<br>Just in CoffeeIn
                                </h1>
                                <p class="text-white animated slideInLeft mb-4 pb-2">Weekend emang paling seru ngopi rame-rame dengan CofeeIn Nikmati serunya Weekendmu ditemani dengan kopi-kopi dari CofeeIn Semua menu favorit kamu ada dalam Cafe Kami.
                                </p>
                                <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Download
                                    Now</a>
                            </div>
                            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                                <img class="img-fluid" src="/frontend/img/kopi.png" width="400" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
