<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrafiKarya</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body style="background-color: #2b2d42;">
    <div class="container-fluid">
        <div class="row">
            <div class="kontainer col-4 position-absolute top-50 start-50 translate-middle px-4">
                <img src="{{ asset('logo/GrafiKaryaDark.png') }}" alt="GrafiKarya" class="mt-4 mb-3">
                <h2>Masuk ke akun anda</h2>
                <form action="">
                    <input type="email" class="form-control border-1 border-black mb-3 mt-4" id="iconified" placeholder="&#xf0e0; Masukkan email anda" style="font-family:Arial, FontAwesome">
                    <input type="password" class="form-control border-1 border-black mb-4" id="iconified" placeholder="&#xf023; Masukkan kata sandi anda"style="font-family:Arial, FontAwesome">
                    <button type="submit" class="mb-2">Masuk</button>
                </form>
                <p>atau <a href="register.html">Daftar</a></p>
            </div>
        </div>
    </div>
</body>

</html>