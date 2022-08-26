@extends('layouts.pages', ['tittle' => 'Berita - STKIP Persada Khatulistiwa'])
@section('header', 'Berita')
@section('content')

    <div class="row mt-5" style="text-align: justify">
        <div class="col-md-5">
            <center>
                <img class="img-fluid" style="width: 400px" src={{ asset('assets/img/berita-1.jpeg') }} alt="">
            </center>
        </div>
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
                            Senin, 15 Agustus 2022 BPBAT Mandiangin yang diwakili oleh Bapak Khairul... </p>
                    </div>
                    <div class="row" style="align-items: flex-end">
                        <a href="#">Baca Selengkapnya</a>
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
                            Senin, 15 Agustus 2022 BPBAT Mandiangin yang diwakili oleh Bapak Khairul...
                        </p>
                    </div>
                    <div class="row" style="align-items: flex-end">
                        <a href="#">Baca Selengkapnya</a>
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

@endsection
