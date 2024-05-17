<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrafiKarya</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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
    <div class="container-fluid">
        <div class="row">
            <!-- Navbar Start -->
            <div class="nav pt-3 pb-2 px-3">
                <div class="col-sm-7">
                    <img src="{{ asset('logo/GrafiKarya.png') }}" alt="GrafiKarya" style="height: 35px; width: 153px; margin-top: 7px;">
                </div>
                <div class="navbar col-sm-3">
                    <ul class="column-gap-3">
                        <li><a href="">Beranda</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Unggah Karya</a></li>
                    </ul>
                </div>
                <div class="login col-sm-1 ms-5">
                    <form action="login.html" class="ms-5">
                        <input type="submit" value="Login" class="tombolLogin">
                    </form>
                </div>
            </div>
            <!-- Navbar End -->
            <!-- Main Start -->
            <div class="main pt-2">
                <div class="judul mt-5 mb-5">
                    <h1>DAFTAR KARYA</h1>
                </div>
                <!--  -->
                <div class="row column-gap-3 mx-3">
                    @foreach ($karya as $item)
                    <div class="card mb-3 col-md-3 border-0" style="max-width: 18rem;">
                        <a href="{{ route('karya.show', ['karya' => $item->id]) }}">
                            <img src="{{ asset(str_replace('public', 'storage', $item->gambar)) }}" class="card-img-top" alt="Karya">
                            <div class="card-body">
                                <p>{{ $item->judul }}</p>
                            </div>
                        </a>
                    </div>    
                    @endforeach
                </div>
                <!--  -->
            </div>
            <!-- Main End -->
            <!-- Footer Start -->
            <footer class="footer px-3 pt-2 pb-4">
                <div class="row">
                    <div class="kiri col-md-4 mt-5">
                        <img src="{{ asset('logo/GrafiKarya.png') }}" alt="Grafikarya" style="height: 35px; width: 153px;">
                        <p>Jl. Tanimbar 22, Kasin Kec. Klojen Kota Malang, Jawa Timur 65117</p>
                    </div>
                    <div class="tengah col-md-4 mt-4 ps-3">
                        <label for="">FAQ</label>
                        <input type="text" class="form-control" name="faq" id="faq">
                    </div>
                    <div class="kanan col-md-3 mt-5">
                        <p>Hubungi Kami:</p>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-solid fa-envelope"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                    </div>
            </footer>
        </div>
        <!-- Footer End -->
    </div>
    </div>
</body>

</html>