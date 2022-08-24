@include('layouts.header')
@include('layouts.navbar')

<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100 img-fluid" style="width: 100%; height: 800px" src={{ asset('assets/img/stkip-1.jpg') }}
                    alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">STKIP PERSADA KHATULISTIWA
                                    SINTANG
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100 img-fluid" style="width: 100%; height: 800px"
                    src={{ asset('assets/img/stkip-2.jpeg') }} alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <h1 class="display-2 text-light mb-5 animated slideInDown">Program Sarjana STKIP Sintang
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row">
            <b>
                <h1 class="text-center text-uppercase mb-2">Berita</h1>
            </b>
        </div>
        <div class="row mt-5" style="text-align: justify">
            <div class="col-md-7">
                <h3>Selamat menjadi ASESOR PPG GTK</h3> <br>
                <p>
                    Selamat dan Sukses untuk Bapak dan Ibu yang lulus pada proses Pelatihan dan Sertifikasi Targeted
                    Selection Interviewer (TSI) . Selamat menjadi ASESOR PPG GTK. <br><br>

                    1. Batch 7 (6-9 Juni 2022)
                    Ibu Agusta Kurniati, M.Pd. <br>

                    2. Batch 8 (13-16 Juni 2022)
                    Bapak Munawar Thoharudin, M.Pd.
                    Ibu Nelly Wedyawati, S.Si., M.Pd. <br>

                    3. Batch 12 (11-14 Juli 2022)
                    Ibu Anna Marganingsih, SE., M.Pd.
                    Bapak Suparno, M.Pd. <br>

                    4. Batch 13 (18-21 Juli 2022)
                    Ibu Ursula Dwi Oktaviani, M.Pd. <br>

                    Selamat bertugas dan Sukses🙏😊🌼
                </p>
                <a href="#">Baca Selengkapnya</a>
            </div>
            <div class="col-md-5">
                <center>
                    <img class="img-fluid" style="width: 400px" src={{ asset('assets/img/berita-1.jpeg') }}
                        alt="">
                </center>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card" style="height: 420px">
                    <img style="width: 400px; height: 300px" src={{ asset('assets/img/berita-2.jpeg') }}
                        class="align-self-center card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <p class="card-text">Semarak Peringatan Hari Ulang Tahun Kemerdekaan Indonesia Ke-77...</p>
                        </div>
                        <div class="row" style="align-items: flex-end">
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img style="width: 400px; height: 300px" src={{ asset('assets/img/berita-3.jpeg') }}
                        class="align-self-center card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <p class="card-text">
                                Senin, 15 Agustus 2022 BPBAT Mandiangin yang diwakili oleh Bapak Khairul
                                memberikan...
                            </p>
                        </div>
                        <div class="row" style="align-items: flex-end">
                            <a href="">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img style="width: 400px; height: 300px" src={{ asset('assets/img/berita-4.jpeg') }}
                        class="align-self-center card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <div class="row">
                            <p class="card-text">
                                Sintang, 19 Agustus 2022. Ketua STKIP Persada Khatulistiwa Didin
                                Syafruddin, SP. M.Si...
                            </p>
                        </div>
                        <div class="row">
                            <a href="#">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <a href={{ url('berita') }} class="mx-auto col-3 btn btn-dark btn-md wow fadeInUp mt-5"
                data-wow-delay="0.2s">LIHAT
                SEMUA BERITA &nbsp; &#8594</a>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Courses Start -->
<div class="container-xxl courses my-6 py-6 pb-0">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6 mb-4 text-uppercase mb-2">Agenda</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <h5 class="mb-3 mt-5">Judul Agenda</h5>
                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3
                                Week</li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" style="height: 300px" src={{ asset('assets/img/stkip-2.jpeg') }}
                            alt="">
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <h5 class="mb-3 mt-5">Judul Agenda</h5>
                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3
                                Week</li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" style="height: 300px" src={{ asset('assets/img/stkip-1.jpg') }}
                            alt="">
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <h5 class="mb-3 mt-5">Judul Agenda</h5>
                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3
                                Week</li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" style="height: 300px" src={{ asset('assets/img/stkip-3.jpg') }}
                            alt="">
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="#" class="mx-auto col-3 btn btn-dark btn-md wow fadeInUp mt-5" data-wow-delay="0.8s">LIHAT
                SEMUA AGENDA &nbsp; &#8594</a>
        </div>
    </div>
</div>
<!-- Courses End -->


<!-- Features Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-uppercase display-6 mb-4">PENGUMUMAN</h1>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                            </div>
                            <h5 class="mb-0">Fully Licensed</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                            </div>
                            <h5 class="mb-0">Online Tracking</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                            </div>
                            <h5 class="mb-0">Afordable Fee</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary me-3">
                            </div>
                            <h5 class="mb-0">Best Trainers</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden pe-5  h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src={{ asset('assets/img/pengumuman.png') }}
                        alt="" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Team Start -->
<div class="container-xxl courses1 py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="text-uppercase display-6 mb-4">Yayasan</h1>
        </div>
        <div class="row g-0 team-items">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src={{ asset('assets/img/team-1.jpg') }} alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">Y.A.T Lukman Riberu <br><br></h5>
                        <span>Ketua Yayasan <br><br> </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src={{ asset('assets/img/team-2.jpg') }} alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">HERPANUS, S.P., M.A., PH.D</h5>
                        <span>WAKIL KETUA BIDANG NON AKADEMIK</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src={{ asset('assets/img/team-3.jpg') }} alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">DR. ADRIANA GANDASARI, M.PD</h5>
                        <span>WAKIL KETUA BIDANG AKADEMIK</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src={{ asset('assets/img/team-4.jpg') }} alt="">
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2">DIDIN SYAFRUDDIN.SP.,M.SI</h5>
                        <span>Trainer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="text-uppercase mb-2 display-6 mb-4">Kaprodi</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto"
                                src={{ asset('assets/img/testimonial-1.jpg') }} alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                            lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                        </p>
                        <hr class="w-25 mx-auto">
                        <h5>Judul Nama</h5>
                        <span>Kaprodi blablabla</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto"
                                src={{ asset('assets/img/testimonial-2.jpg') }} alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                            lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                        </p>
                        <hr class="w-25 mx-auto">
                        <h5>Judul Nama</h5>
                        <span>Kaprodi blablabla</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto"
                                src={{ asset('assets/img/testimonial-3.jpg') }} alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore
                            lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.
                        </p>
                        <hr class="w-25 mx-auto">
                        <h5>Judul Nama</h5>
                        <span>Kaprodi blablabla</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="text-uppercase mb-2 display-6 mb-4">Lokasi</h1>
        </div>
        <div class="row justify-content-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8165785538235!2d111.47738531483918!3d0.0535375999609431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fe223fde00934f%3A0xde19bf8d2e8789de!2sSTKIP%20Persada%20Khatulistiwa%20Sintang!5e0!3m2!1sid!2sid!4v1661238672690!5m2!1sid!2sid"
                width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<div class="container-xxl py-6">
    <div class="container">
        <div class="row col-12 text-center">
            <div class="col-lg-4">
                <a href="https://siakad.persadakhatulistiwa.ac.id/"
                    class="col-12 btn btn-primary btn-lg mx-auto py-3">SIAKAD</a>
            </div>
            <div class="col-lg-4">
                <a href="https://persadakhatulistiwa.ac.id/simkeu/main/index.html"
                    class="col-12 btn btn-dark btn-lg mx-auto py-3">SIMKEU</a>
            </div>
            <div class="col-lg-4">
                <a href="https://persadakhatulistiwa.ac.id/simfa/main/index.html"
                    class="col-12 btn btn-success btn-lg mx-auto py-3">SIMFA</a>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
