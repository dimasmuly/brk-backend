@extends('layouts.frontend')

@section('content')
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container text-center my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

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
@endsection
