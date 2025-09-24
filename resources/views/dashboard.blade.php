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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <!-- Container wrapper -->
        <div class="container border-bottom">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
            </a>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-bold link-dark" href="/">SIMS PPOB</a>
                    </li>
                </ul>
                <!-- Left links -->
                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="btn px-3 me-2">
                        Top Up
                    </button>
                </div>
                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="btn px-3 me-2">
                        Transaction
                    </button>
                </div>
                <div class="d-flex align-items-center">
                    <button data-mdb-ripple-init type="button" class="btn px-3 me-2">
                        Akun
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-3">
                <img src="{{ asset('images/Profile Photo.png') }}" alt="profile" class="mb-3">
                <p class="mb-0">Selamat datang,</p>
                <p class="fs-5 fw-bold">Aprila Satya</p>
            </div>
            <div class="col-6" style="position: relative;">
                <img src="{{ asset('images/Background Saldo.png') }}" alt="Background Saldo">
                <div style="position: absolute; top: 13%; left: 8%; color: white;">
                    <p>Saldo anda</p>
                    <div class="row fs-3">
                        <label for="rp" class="col-sm-2 col-form-label">RP</label>
                        <div class="col">
                            <input type="password" readonly style="color: white;" class="form-control-plaintext pwd"
                                value="10000000" id="rp">
                        </div>
                    </div>
                    <div class="mb-3 row" style="font-size: 12px">
                        <div class="col viewsaldo" style="display: inline-block;">
                            Lihat Saldo
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <img src="{{ asset('images/PBB.png') }}" alt="">
                <p class="text-center">PBB</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/Listrik.png') }}" alt="">
                <p class="text-center">Listrik</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/Pulsa.png') }}" alt="">
                <p class="text-center">Pulsa</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/PDAM.png') }}" alt="">
                <p class="text-center">PDAM</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/PGN.png') }}" alt="">
                <p class="text-center">PGN</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/Televisi.png') }}" alt="">
                <p class="text-center">TV Langganan</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/Musik.png') }}" alt="">
                <p class="text-center">Musik</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/Game.png') }}" alt="">
                <p class="text-center">Voucher Game</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/Voucher Makanan.png') }}" alt="">
                <p class="text-center">Voucher Makanan</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/Kurban.png') }}" alt="">
                <p class="text-center">Kurban</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/Zakat.png') }}" alt="">
                <p class="text-center">Zakat</p>
            </div>
            <div class="col">
                <img src="{{ asset('images/Paket Data.png') }}" alt="">
                <p class="text-center">Paket Data</p>
            </div>
        </div>
        <div class="row mt-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col"><img src="{{ asset('images/Banner 1.png') }}" class="d-block w-100"
                                    alt="..."></div>
                            <div class="col"><img src="{{ asset('images/Banner 2.png') }}" class="d-block w-100"
                                    alt="..."></div>
                            <div class="col"><img src="{{ asset('images/Banner 3.png') }}" class="d-block w-100"
                                    alt="..."></div>
                            <div class="col"><img src="{{ asset('images/Banner 4.png') }}" class="d-block w-100"
                                    alt="..."></div>
                            <div class="col"><img src="{{ asset('images/Banner 5.png') }}" class="d-block w-100"
                                    alt="..."></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col"><img src="{{ asset('images/Banner 1.png') }}" class="d-block w-100"
                                    alt="..."></div>
                            <div class="col"><img src="{{ asset('images/Banner 2.png') }}" class="d-block w-100"
                                    alt="..."></div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(".viewsaldo").on('click', function() {
            var $pwd = $(".pwd");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
            } else {
                $pwd.attr('type', 'password');
            }
        });
    </script>
</body>

</html>
