@extends('layouts.frontend')

@section('content')
    <!-- Hero Start -->
    <div class="container-xxl position-relative p-0">
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
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="/frontend/img/boba.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                src="/frontend/img/bobaa.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                src="/frontend/img/wallp.jpeg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                src="/frontend/img/wallpp.jpeg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                    <h2 class="mb-4">Selamat Datang di <i class="fa fa-coffee text-primary me-2"></i>CoffeeIn</h2>
                    <p class="mb-4">CoffeIn adalah produsen pelopor kopi di Jawa Timur. Cafe ini didirikan pada tahun 2012, dengan Cafe Kopi pertama di Jawa Timur. Setelah beroperasi selama 10 tahun, kini CoffeIn memiliki 10 cabang di seluruh Jawa Timur.</p>
                    <p class="mb-4">Pada tahun 2012, CoffeIn melakukan langkah strategis untuk bergabung dengan Dinas Perindustrian DAN Perdagangan,
                         yang merupakan unsur pelaksana urusan pemerintahan yang menjadi kewenangan daerah di bidang perdagangan dan urusan pemerintahan yang menjadi kewenangan daerah di bidang perindustrian serta tugas pembantuan.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10
                                </h1>
                                <div class="ps-4">
                                    <p class="mb-0">Tahun</p>
                                    <h6 class="text-uppercase mb-0">Berdiri</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50
                                </h1>
                                <div class="ps-4">
                                    <p class="mb-0">Produk</p>
                                    <h6 class="text-uppercase mb-0">Terbaik</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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
    <!-- Service End -->


    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu Kami</h5>
                <h1 class="mb-5">Menu Populer</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                            href="#tab-1">
                            <i class="fas fa-mug-hot fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Small</small>
                                <h6 class="mt-n1 mb-0">Size</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Medium</small>
                                <h6 class="mt-n1 mb-0">Size</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-beer fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Big</small>
                                <h6 class="mt-n1 mb-0">Size</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/arabika.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Arabica</span>
                                            <span class="text-primary">Rp 25.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi yang memiliki cita rasa lembut, segar, dengan sensasi buah atau biasa disebut fruity.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/robusta.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Robusta
                                            </span>
                                            <span class="text-primary">Rp 23.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi paling terkenal di Indonesia yang memiliki warna yang kuat dan lebih kental.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/liberka.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span> Kopi Liberika
                                            </span>
                                            <span class="text-primary">Rp 23.000</span>
                                        </h5>
                                        <small class="fst-italic">Jika diseduh, akan tercium aroma buah dan bunga. Rasa yang dikeluarkan agak lebih 'woody'.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/luwak.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Luwak
                                            </span>
                                            <span class="text-primary">Rp 22.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi luwak termasuk kopi termahal di dunia yang berasal dari hewan musang (luwak).
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/tubruk.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Tubruk
                                            </span>
                                            <span class="text-primary">Rp 23.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi khas Indonesia yang dibuat dengan menuangkan air panas ke dalam gelas atau teko yang sudah diisi bubuk kopi.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/latte.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Latte
                                            </span>
                                            <span class="text-primary">Rp 22.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi dari Italia dengan penyajian yang cukup unik yaitu terdapat krim susu diatas kopi.
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/arabika.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Arabica
                                            </span>
                                            <span class="text-primary">Rp 28.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi yang memiliki cita rasa lembut, segar, dengan sensasi buah atau biasa disebut fruity.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/robusta.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Robusta
                                            </span>
                                            <span class="text-primary">Rp 27.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi paling terkenal di Indonesia yang memiliki warna yang kuat dan lebih kental.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/liberka.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Liberika
                                            </span>
                                            <span class="text-primary">Rp 27.000</span>
                                        </h5>
                                        <small class="fst-italic">Jika diseduh, akan tercium aroma buah dan bunga. Rasa yang dikeluarkan agak lebih 'woody'.
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/luwak.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Luwak
                                            </span>
                                            <span class="text-primary">Rp 27.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi luwak termasuk kopi termahal di dunia yang berasal dari hewan musang (luwak).</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/tubruk.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Tubruk
                                            </span>
                                            <span class="text-primary">Rp 28.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi khas Indonesia yang dibuat dengan menuangkan air panas ke dalam gelas atau teko yang sudah diisi bubuk kopi.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/latte.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Latte
                                            </span>
                                            <span class="text-primary">Rp 27.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi dari Italia dengan penyajian yang cukup unik yaitu terdapat krim susu diatas kopi.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/arabika.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Arabica
                                            </span>
                                            <span class="text-primary">Rp 35.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi yang memiliki cita rasa lembut, segar, dengan sensasi buah atau biasa disebut fruity.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/robusta.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Robusta
                                            </span>
                                            <span class="text-primary">Rp 33.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi paling terkenal di Indonesia yang memiliki warna yang kuat dan lebih kental.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/liberka.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Liberika
                                            </span>
                                            <span class="text-primary">Rp 34.000</span>
                                        </h5>
                                        <small class="fst-italic">Jika diseduh, akan tercium aroma buah dan bunga. Rasa yang dikeluarkan agak lebih 'woody'.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/luwak.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Luwak
                                            </span>
                                            <span class="text-primary">Rp 33.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi luwak termasuk kopi termahal di dunia yang berasal dari hewan musang (luwak).</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/tubruk.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Tubruk
                                            </span>
                                            <span class="text-primary">Rp 35.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi khas Indonesia yang dibuat dengan menuangkan air panas ke dalam gelas atau teko yang sudah diisi bubuk kopi.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="/frontend/img/latte.jpg" alt=""
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Kopi Latte
                                            </span>
                                            <span class="text-primary">Rp 33.000</span>
                                        </h5>
                                        <small class="fst-italic">Kopi dari Italia dengan penyajian yang cukup unik yaitu terdapat krim susu diatas kopi.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reservation Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="video">
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://youtu.be/qfk8lOzwo2Q" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Documentation</h5>
                    <h1 class="text-white mb-4">Kenalan, yuk! Ini Dia Berbagai Metode Pembuatan Kopi</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Metode-metode dalam pembuatan kopi mungkin
                        sudah tidak asing lagi di telinga kamu, terlebih untuk kamu yang sangat suka meminum kopi
                        sebelum beraktivitas.

                        Perlu kamu ketahui, bahwa seiring dengan semakin berkembangnya teknologi, membuat pemahaman
                        akan kopi pun semakin meningkat.

                        Hal ini menandakan bahwa kopi tidak lagi hanya sekedar tuang, seduh, dan aduk.

                        Penyajian kopi pun menjadi semakin berkembang dengan mulai banyaknya penjualan pada kedai
                        kopi dunia, termasuk Indonesia.

                        Ketika kamu ingin menikmati segelas kopi di sebuah kedai, kamu pun akan sering mendengar
                        berbagai istilah dalam penyajian kopi tersebut.

                        Seperti halnya french press, aeropress, dan masih banyak lainnya.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Start -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                <h1 class="mb-5">Apa Kata Mereka!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Iya enak, gulanya pas!!!</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="/frontend/img/gw.jpg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">dmsmulya</h5>
                            <small>Student</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Kopi latte nya art nya bagus, cocok buat foto estetik</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="/frontend/img/vita.jpg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Vita Nada</h5>
                            <small>Student</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Minuman kopi ini sangat cocok dinikmati saat mengerjakan tugas apalagi di cuaca dingin seperti sekarang ini.
                    </p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="/frontend/img/amel.jpg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Amalia Siska</h5>
                            <small>Student</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Rasa kopi tubruknya sangat nikmat. Apalagi diminum pas masih hangat sambil sebat rokok sebatang. mantap...
                    </p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="/frontend/img/bahrul.jpeg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Bahrul Ulum</h5>
                            <small>Student</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Kopi Americano sangat enak, cocok untuk dinikmati disaat santai. Dan juga memiliki rasa yang halus dimana dapat merasakan rasa kuat yang ditawarkan oleh esspreso yang luar biasa
                    </p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="/frontend/img/laura.jpg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Laura Nada</h5>
                            <small>Student</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
