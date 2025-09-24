<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMS PPOB-Aprila Satya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black align-content-center">

                    <div class="px-5 text-center">
                        <h1>

                            <img src="{{ asset('images/logo.png') }}" alt="logo"
                                style="width: 40px; height: 40px;" />
                            <span class="fw-bold">SIMS PPOB</span>
                        </h1>
                    </div>

                    <div class="align-items-center h-custom-2 px-5 mt-5 text-center">

                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <h3 class="fw-normal mb-3 text-center" style="letter-spacing: 1px;">Lengkapi data untuk
                                membuat akun</h3>
                            <div class="input-group mb-4 px-4 mt-5">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-at"></i> <!-- Example Bootstrap Icon -->
                                </span>
                                <input type="email" class="form-control" placeholder="masukkan email anda"
                                    aria-label="Email" aria-describedby="basic-addon1" name="email">
                            </div>
                            <div class="input-group mb-4 px-4">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-user"></i> <!-- Example Bootstrap Icon -->
                                </span>
                                <input type="text" class="form-control" placeholder="nama depan"
                                    aria-label="Namadepan" aria-describedby="basic-addon1" name="namadepan">
                            </div>
                            <div class="input-group mb-4 px-4">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-user"></i> <!-- Example Bootstrap Icon -->
                                </span>
                                <input type="text" class="form-control" placeholder="nama belakang"
                                    aria-label="Namabelakang" aria-describedby="basic-addon1" name="namabelakang">
                            </div>
                            <div class="input-group mb-4 px-4">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-solid fa-lock"></i> <!-- Example Bootstrap Icon -->
                                </span>
                                <input type="password" class="form-control pwd" placeholder="buat password"
                                    aria-label="Password" aria-describedby="basic-addon1" name="password">
                                <span class="input-group-text reveal"><i class="fas fa-eye"></i></span>
                            </div>
                            <div class="input-group mb-4 px-4">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-solid fa-lock"></i> <!-- Example Bootstrap Icon -->
                                </span>
                                <input type="password" class="form-control repwd" placeholder="konfirmasi password"
                                    aria-label="Repassword" aria-describedby="basic-addon1" name="confirm-password">
                                <span class="input-group-text reveal2"><i class="fas fa-eye"></i></span>
                            </div>
                            <div class="d-grid px-4">
                                <button class="btn btn-danger" type="submit">Masuk</button>
                            </div>
                            <p class="mt-5">sudah punya akun? login<a href="{{ route('login') }}"
                                    class="link-info">disini</a>
                            </p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="{{ asset('images/Illustrasi Login.png') }}" alt="Login image">
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(".reveal").on('click', function() {
            var $pwd = $(".pwd");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });
        $(".reveal2").on('click', function() {
            var $pwd = $(".repwd");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });
    </script>
</body>

</html>
