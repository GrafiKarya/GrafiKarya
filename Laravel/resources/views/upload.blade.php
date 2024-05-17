<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrafiKarya</title>
    <link rel="stylesheet" href="{{ asset('css/upload.css') }}">
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
            <div class="nav pt-3 px-3">
                <div class="col-sm-7">
                    <img src="assets/GrafiKarya.png" alt="GrafiKarya"
                        style="height: 35px; width: 153px; margin-top: 7px;">
                </div>
                <div class="navbar col-sm-3">
                    <ul class="column-gap-3">
                        <li><a href="">Beranda</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Unggah Karya</a></li>
                    </ul>
                </div>
            </div>
            <!-- Navbar End -->
            <!-- Main Start -->
            <div class="judul">
                <h1 class="my-3">Unggah Karya</h1>
                <hr style="height: 1px;">
            </div>
            <div class="unggah">
            <form action="{{ route('karya.store') }}" method="post" class="row column-gap-2 ms-4" enctype="multipart/form-data">
                @csrf
                    <div class="uploadGambar col-sm-5" id="uploadGambar">
                        <i class="fa-regular fa-circle-up"></i>
                        <br>
                        <input type="file" name="gambar" accept="image/*">
                    </div>
                    <div class="inputan col-sm-6">
                        
                        <label for="JudulKarya" class="form-label">Judul Karya</label>
                        <input type="text" class="form-control mb-2 border-1 border-black " id="JudulKarya" name="judul">
                        <label for="Keterangan" class="form-label">Keterangan</label>
                        <input type="text" class="form-control mb-4 border-1 border-black" id="Keterangan" name="keterangan">
                        <button type="submit" class="border-0">Unggah</button>
                    </div>
                </form>
            </div>
            <!-- Main End -->
        </div>
    </div>
    {{-- <script type="text/javascript" src="{{ asset('js/upload.js') }}"></script> --}}
</body>

</html>