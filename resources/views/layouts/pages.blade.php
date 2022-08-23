@include('layouts.header')
@include('layouts.navbar')

<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">@yield('header')</h1>
    </div>
</div>

<div class="container-xxl py-6">
    <div class="container">
        @yield('content')
    </div>
</div>

@include('layouts.footer')
