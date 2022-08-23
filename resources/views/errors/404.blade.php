@include('layouts.header')
@include('layouts.navbar')

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">404 Error</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- 404 Start -->
<div class="container-xxl py-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Halaman Tidak Ditemukan</h1>
                {{-- <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go
                    to our home page or try to use a search?</p> --}}
                <p class="mb-4">
                    Maaf, halaman yang Anda cari tidak ada di website kami! Mungkin pergi
                    ke menu home atau mencoba menggunakan pencarian?</p>
                <a class="btn btn-primary py-3 px-5" href={{ url('/') }}>Go Back To Home</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->

@include('layouts.footer')
