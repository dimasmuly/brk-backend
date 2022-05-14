<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CoffeeIn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/kopi3.png') }}" rel="icon">

    {{-- CSS --}}
    @include('includes.style')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar -->
        @include('includes.navbar')
        <!-- Navbar End -->

        {{-- Content --}}
        @yield('content')
        {{-- Content End --}}

        <!-- Footer Start -->
        @include('includes.footer')
        <!-- Footer End -->

        <!-- JavaScript Libraries -->
        @include('includes.script')
</body>

</html>
