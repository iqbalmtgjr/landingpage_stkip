<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Jl. Pertamina KM 4, Sengkuang, Sintang</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Senin - Jum'at : 07.40 AM - 04.40 PM, Sabtu : 07:00 AM - 12:00 AM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+62-812-5723-9198</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary"
                        href="https://www.facebook.com/stkippersadakhatulistiwa.sintang"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary"
                        href="https://twitter.com/stkip_persada"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary"
                        href="https://www.linkedin.com/company/stkip-persada-khatulistiwa/mycompany/"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/stkip_persada/"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href={{ url('/') }} class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0"><img width="60px" src="{{ asset('assets/img/STKIP.png') }}"
                    alt="">&nbsp;</i>STKIP
                Persada
                Khatulistiwa</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href={{ url('/') }} class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href={{ url('selayang-pandang') }} class="dropdown-item">Selayang Pandang</a>
                        <a href={{ url('struktur-organisasi') }} class="dropdown-item">Struktur Organisasi</a>
                        <a href={{ url('visi-misi-tujuan') }} class="dropdown-item">Visi dan Misi</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program Studi</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a class="dropdown-item" href="https://pbsi.persadakhatulistiwa.ac.id/">Pendidikan Bahasa dan
                            Sastra Indonesia</a>
                        <a class="dropdown-item" href="https://pbio.persadakhatulistiwa.ac.id/">Pendidikan Biologi</a>
                        <a class="dropdown-item" href="https://pbi.persadakhatulistiwa.ac.id/">Pendidikan Bahasa
                            Inggris</a>
                        <a class="dropdown-item" href="https://ppkn.persadakhatulistiwa.ac.id/">Pendidikan Pancasila dan
                            Kewarganegaraan</a>
                        <a class="dropdown-item" href="https://pgsd.persadakhatulistiwa.ac.id/">Pendidikan Guru Sekolah
                            Dasar</a>
                        <a class="dropdown-item" href="https://ekonomi.persadakhatulistiwa.ac.id/">Pendidikan
                            Ekonomi</a>
                        <a class="dropdown-item" href="https://paud.persadakhatulistiwa.ac.id/">Pendidikan Anak Usia
                            Dini</a>
                        <a class="dropdown-item" href="https://pmm.persadakhatulistiwa.ac.id/">Pendidikan Matematika</a>
                        <a class="dropdown-item" href="https://komputer.persadakhatulistiwa.ac.id/">Pendidikan
                            Komputer</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lembaga</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#" class="dropdown-item">UPT. LAB. DAN MICROTEACHING</a>
                        <a href="https://persadakhatulistiwa.ac.id/perpus/" class="dropdown-item">UPT. PERPUSTAKAAN</a>
                        <a href="#" class="dropdown-item">LEMBAGA BUDAYA DAN BAHASA KALIMANTAN</a>
                        <a href="#" class="dropdown-item">KEWIRAUSAHAAN</a>
                        <a href="#" class="dropdown-item">KEMAHASISWAAN DAN ALUMNI</a>
                        <a href="#" class="dropdown-item">Lembaga Penelitian dan Pengabdian Masyrakat</a>
                    </div>
                </div>
                <a href={{ url('/pmb') }} class="nav-item nav-link">PMB</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href={{ url('unduh-surat') }} class="dropdown-item">Download Format Surat</a>
                        <a href={{ url('berita') }} class="dropdown-item">Berita</a>
                        <a href={{ url('informasi-beasiswa') }} class="dropdown-item">Informasi Beasiswa</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">E-Learn</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="https://persadakhatulistiwa.ac.id/kuliah/" class="dropdown-item">E-Learning</a>
                        <a href="http://persadakhatulistiwa.ac.id/perpus/" class="dropdown-item">E-Library</a>
                    </div>
                </div>
                <a href="http://180.249.253.207/auth/login" class="nav-item nav-link">SISTER</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
