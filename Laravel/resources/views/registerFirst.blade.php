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
                <h2>Buat akun anda</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="form-control border-1 border-black" 
                                      type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
                                      placeholder="&#xf023; Masukkan kata sandi" style="font-family:Arial, FontAwesome" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control border-1 border-black" 
                                      type="email" name="email" :value="old('email')" required autocomplete="username"
                                      placeholder="&#xf0e0; Masukkan email" style="font-family:Arial, FontAwesome" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="form-control border-1 border-black" 
                                      type="password" name="password" required autocomplete="new-password"
                                      placeholder="&#xf023; Masukkan kata sandi" style="font-family:Arial, FontAwesome" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="form-control border-1 border-black" 
                                      type="password" name="password_confirmation" required autocomplete="new-password"
                                      placeholder="&#xf023; Konfirmasi kata sandi" style="font-family:Arial, FontAwesome" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <x-primary-button class="btn btn-primary">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
                <p>Sudah memiliki akun? <a href="{{ route('login') }}">Masuk</a></p>
            </div>
        </div>
    </div>
</body>

</html>
