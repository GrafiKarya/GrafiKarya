<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrafiKarya</title>
    <link rel="stylesheet" href="{{ asset('css/detailKarya.css') }}">
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
    <!-- header -->
    <div class="container-fluid">
        <div class="row">
            <div class="nav pt-2 px-3">
                <div class="col-sm-6">
                    <img src="{{ asset('logo/logo gk aseli.png') }}" alt="logo" style="width: 3rem;" class="me-1">
                    <img src="{{asset('logo/GrafiKarya.png') }}" alt="GrafiKarya"
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
    <!-- header -->
    <!-- tombol back -->
    <div class="container-fluid my-3">
        <div class="row">
            <div class="tombol col-1">
                <button onclick="history.back()" class="border-0 rounded-circle"><i class="fa-solid fa-arrow-left"></i></button>
            </div>
        </div>
    </div>
    <!-- tombol back -->
    <!-- detailnya -->
    <div class="container-fluid px-4 overflow-hidden">
        <div class="row row-gap-3 px-4 pt-4 pb-5 rounded-4 shadow-lg detailnya">
            <div class="gambar col-xl-5 col-sm-12">
                <img src="{{ asset(str_replace('public', 'storage', $karya->gambar)) }}" alt="" class="rounded-5 w-100">
                <button class="border-0 rounded-circle" onclick=""><i class="fa-regular fa-heart"></i></button>
            </div>
            <div class="deskripsi col-xl-7 col-sm-12">
                <h2>{{ $karya->judul }}</h2>
                <p>{{ $karya->keterangan }}</p>
                <div class="diplay-komentar">
                    <h5>Komentar</h5>
                    <!-- far aku gatau cara nge displaynya :( -->
                </div>
                <hr style="height: 1px;">
                <div class="input-komentar">
                    <form action="">
                        <label for="komentar" class="form-label"><h6>Berikan komentar anda</h6></label>
                        <input type="text" name="" id="komentar" class="form-control border-1 border-secondary rounded-4 bg-transparent border px-3" placeholder="Tambahkan komentar..">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- detailnya -->
    <!-- karya lainnya -->
    <div class="container mt-5 mb-3 karyaLainnya">
        <h1 id="karyaLainnya">Karya Lainnya</h1>
        <div class="row row-gap-4 column-gap-3 mt-3 justify-content-center">
            @foreach ($lainnya as $item)
            <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-1 shadow-lg">
                    <div class="card-body">
                        <a href="">
                            <img src="{{ asset(str_replace('public', 'storage', $item->gambar)) }}" class="card-img-top rounded shadow-lg" alt="Karya">
                            <p class="mt-2">{{ $item->judul }}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-1 shadow-lg">
                    <div class="card-body">
                        <a href="">
                            <img src="{{ asset('logo/wallpaperflare.com_wallpaper.jpg') }}" class="card-img-top rounded shadow-lg" alt="Karya">
                            <p class="mt-2">Judul Karya</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row col-xs-6 col-sm-6 col-lg-4 col-xxl-3">
                <div class="card border-1 shadow-lg">
                    <div class="card-body">
                        <a href="">
                            <img src="{{ asset('logo/wallpaperflare.com_wallpaper.jpg') }}" class="card-img-top rounded shadow-lg" alt="Karya">
                            <p class="mt-2">Judul Karya</p>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- karya lainnya -->
    <!-- footer -->
    <div class="container-fluid" id="footer">
        <footer class="px-3 pt-2 pb-4">
            <div class="row">
                <div class="kiri col-4 mt-5 pe-5">
                    <img src="{{ asset('logo/GrafiKarya.png') }}" alt="Grafikarya" style="height: auto; width: 153px;">
                    <p>Jl. Tanimbar 22, Kasin Kec. Klojen Kota Malang, Jawa Timur 65117</p>
                </div>
                <div class="tengah col-4 mt-4 ps-5">
                    <label for="">FAQ</label>
                    <input type="text" class="form-control form-control-sm w-100" name="faq" id="faq">
                </div>
                <div class="kanan col-4 mt-5">
                    <p>Hubungi Kami:</p>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-solid fa-envelope"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
        </footer>
    </div>
    <!-- footer -->
</body>

</html>