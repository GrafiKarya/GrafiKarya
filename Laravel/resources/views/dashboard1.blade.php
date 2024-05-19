<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrafiKarya</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid">
        <div class="row">
            <div class="nav pt-2 px-3">
                <div class="col-sm-6">
                    <img src="{{ asset('logo/GrafiKarya.png') }}" alt="GrafiKarya"
                        style="height: 35px; width: 153px; margin-top: 7px;">
                </div>
                <div class="navbar col-sm-6">
                    <ul class="column-gap-4">
                        <li><a href="">Beranda</a></li>
                        <li><a href="">Daftar Karya</a></li>
                        <li><a href="">Unggah Karya</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <!-- Carousel -->
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active c-item">
                <img src="{{ asset('logo/_MG_9003.JPG') }}" class="d-block w-100 c-img" alt="...">
            </div>
            <div class="carousel-item c-item">
                <img src="{{asset('logo/20231208_150024.jpg') }}" class="d-block w-100 c-img" alt="...">
            </div>
            <div class="carousel-item c-item">
                <img src="{{ asset('logo/WhatsApp Image 2024-05-19 at 16.03.24_90fd117f.jpg') }}" class="d-block w-100 c-img" alt="...">
            </div>
            <div class="carousel-item c-item">
                <img src="{{ asset('logo/WhatsApp Image 2024-05-19 at 16.12.34_b9530fb6.jpg') }}" class="d-block w-100 c-img" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel -->
    <!-- Info -->
    <div class="container mt-5">
        <div class="row">
            <div class="info col-12">
                <h1>Grafika Karya</h1>
                <p>Website galeri sekolah penting untuk memperlihatkan kegiatan siswa dan prestasi
                    sekolah kepada masyarakat. Melalui galeri ini, siswa dapat memamerkan karya mereka,
                    sementara sekolah dapat mendokumentasikan berbagai prestasi siswa. Ini tidak hanya
                    mempromosikan sekolah kepada calon siswa dan orang tua, tetapi juga memperkuat
                    komunikasi dengan komunitas, meningkatkan keterlibatan orang tua, dan membangun
                    citra positif sekolah.</p>
            </div>
        </div>
    </div>
    <!-- Info -->
    <!-- Karya Baru -->
    <div class="container mt-5 mb-3 KaryaBaru">
        <h1 id="karyaBaru">Karya Baru</h1>
        <div class="row row-gap-4 column-gap-2 mt-3 justify-content-start">
            @foreach(session('terbaru') as $t)
            <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-0">
                    <div class="card-body">
                        <a href="">
                            <img src="{{ asset(str_replace('public', 'storage', $t->gambar)) }}" class="card-img-top rounded shadow-lg" alt="Karya">
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-0">
                    <div class="card-body">
                        <a href="">
                            <img src="assets/tegah.jpg" class="card-img-top rounded shadow-lg" alt="Karya">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-0">
                    <div class="card-body">
                        <a href="">
                            <img src="assets/tegah.jpg" class="card-img-top rounded shadow-lg" alt="Karya">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-0">
                    <div class="card-body">
                        <a href="">
                            <img src="assets/tegah.jpg" class="card-img-top rounded shadow-lg" alt="Karya">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Karya Baru -->
    <!-- Karya Populer -->
    <div class="container mt-5 KaryaBaru">
        <h1 id="karyaBaru">Karya Populer</h1>
        <div class="row row-gap-4 column-gap-2 mt-3 justify-content-start">
            
            <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-0">
                    <div class="card-body">
                        <a href="">
                            <img src="assets/tegah.jpg" class="card-img-top rounded shadow-lg" alt="Karya">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-0">
                    <div class="card-body">
                        <a href="">
                            <img src="assets/tegah.jpg" class="card-img-top rounded shadow-lg" alt="Karya">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-0">
                    <div class="card-body">
                        <a href="">
                            <img src="assets/tegah.jpg" class="card-img-top rounded shadow-lg" alt="Karya">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Karya Populer -->
    <!-- footer -->
    <div class="footer container-fluid mt-5 px-4 py-5">
        <div class="row">
            <div class="kiri col-6">
                <img src="{{ asset('logo/GrafiKarya.png') }}" alt="Grafikarya" style="height: auto; width: 153px;">
                <p>Jl. Tanimbar 22, Kasin Kec. Klojen Kota Malang, Jawa Timur 65117</p>
            </div>
            <div class="kanan col-6 pt-2">
                <p>Hubungi Kami:</p>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-solid fa-envelope"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- footer -->
</body>

</html>