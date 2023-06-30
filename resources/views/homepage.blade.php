<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MISOBAE.ID</title>

    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-body-light" style="padding: 0 !important">
        <div class="container">
            <a class="navbar-brand text-decoration-none" href="/show">
                <h2 class="text-logo" style="color:#8d6e63">MISOBAE.ID</h2>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/show">Belanja</a>
                    </li>

                    <li class="nav-item d-flex align-items-center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ route('logout') }}" class="nav-link text-decoration-none">
                                    Keluar
                                </a>
                            @else
                                <a href="/login" class="nav-link text-decoration-none">
                                    Masuk
                                </a>
                                @if (Route::has('register'))
                                    <a href="/register" class="nav-link text-decoration-none">
                                        Daftar
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="background-color: #f6f7fb">
        <div class="container">
            <div class="row">
                <div class="content1" id="content1">
                    <div class="col-7">
                        <h1>
                            <span>MISOBAE.ID</span>
                        </h1>
                        <p>Jasa e-commerce Polaroid kami adalah platform online yang menghadirkan pengalaman fotografi
                            instan yang menyenangkan dan unik. Kami menyediakan berbagai produk dan layanan terkait
                            dengan kamera Polaroid, memungkinkan pengguna untuk menjelajahi dan membeli produk-produk
                            berkualitas tinggi dengan mudah melalui platform kami.
                        </p>
                        <div class="flex-button-content1">
                            <a class="btn text-white" href="/show" style="background-color: #8d6e63">Belanja
                                Sekarang</a>
                        </div>
                    </div>

                    <div class="col-5">
                        <img src="assets/img/polaroid-4.png">
                    </div>
                </div>

                <div class="content4" id="content4">
                    <h2>CONTOH PRODUK DAN JASA</h2>
                    <div class="multiple-items">
                        <img src="assets/img/polaroid-1.png" alt="" width="60">
                        <img src="assets/img/polaroid-2.png" alt="" width="60">
                        <img src="assets/img/polaroid-3.png" alt="" width="60">
                        <img src="assets/img/polaroid-4.png" alt="" width="60">
                    </div>
                </div>

                <div class="content5 d-flex" id="content5">
                    <div class="col-7 right">
                        <button class="collapsible">Apa itu e-commerce jasa Polaroid?
                        </button>
                        <div class="content">
                            <p>E-commerce jasa Polaroid adalah platform online di mana Anda dapat membeli produk-produk
                                Polaroid secara praktis dan nyaman melalui internet. Kami menyediakan berbagai produk
                                Polaroid seperti kamera instan, film Polaroid, aksesori kamera, dan layanan cetak foto
                                Polaroid.
                            </p>
                        </div>

                        <button class="collapsible">Apa keuntungan menggunakan e-commerce jasa Polaroid? </button>
                        <div class="content">
                            <p>Menggunakan e-commerce jasa Polaroid memungkinkan Anda untuk dengan mudah menjelajahi dan
                                membeli produk Polaroid favorit Anda dari kenyamanan rumah Anda. Anda dapat melihat
                                berbagai pilihan produk, membaca ulasan pelanggan, membandingkan harga, dan menghemat
                                waktu dengan pengiriman langsung ke pintu Anda.
                            </p>
                        </div>

                        <button class="collapsible">Apa yang ditawarkan oleh e-commerce jasa Polaroid?</button>
                        <div class="content">
                            <p>Kami menawarkan beragam produk Polaroid yang mencakup kamera instan, film Polaroid,
                                aksesori kamera seperti lensa tambahan dan tas kamera, serta layanan cetak foto Polaroid
                                yang memungkinkan Anda mencetak kenangan indah dalam bentuk foto fisik Polaroid.
                            </p>
                        </div>

                        <button class="collapsible">Bagaimana cara memesan produk Polaroid melalui e-commerce
                            ini?</button>
                        <div class="content">
                            <p>Untuk memesan produk Polaroid, Anda dapat mengunjungi situs web kami dan menjelajahi
                                katalog produk. Pilih produk yang Anda inginkan, tambahkan ke keranjang belanja, dan
                                ikuti langkah-langkah checkout untuk menyelesaikan pembelian. Anda akan diminta untuk
                                memasukkan informasi pengiriman dan pembayaran sebelum konfirmasi pesanan.

                            </p>
                        </div>

                        <button class="collapsible">Apakah produk Polaroid yang dijual asli dan berkualitas?</button>
                        <div class="content">
                            <p> Ya, kami menjual produk Polaroid yang asli dan berkualitas. Kami bekerja sama langsung
                                dengan produsen resmi dan pemasok terpercaya untuk memastikan bahwa semua produk yang
                                kami jual adalah produk asli dan memenuhi standar kualitas yang tinggi.</p>
                        </div>
                    </div>
                    <div class="col-5 left text-end">
                        <h5>MISOBAE.ID</h5>
                        <h2>Pertanyaan Yang Biasa Diajukan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p class="alamat">MISOBAE.ID</p>

            <div class="icon-sosmed">
                <div style="width: 50px; height: 50px; background-color: white; border-radius: 40px;">
                    <img src="assets/img/homepage/instagram.svg" width="25px" style="margin-top: 12px;">
                </div>
                <div style="width: 50px; background-color: white; border-radius: 40px;">
                    <img src="assets/img/homepage/envelope.svg" width="25px" style="margin-top: 12px;">
                </div>
                <div style="width: 50px; background-color: white; border-radius: 40px;">
                    <img src="assets/img/homepage/telephone.svg" width="25px" style="margin-top: 12px;">
                </div>
            </div>
        </div>
    </footer>

    <!--Jquery-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!--Bootstrap-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script type="text/javascript" src="assets/vendor/slick/slick.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        function myFunction() {
            var x = document.getElementById("navbarNav");
            var button = document.getElementById("btn");
            if (x.className === "collapse navbar-collapse") {
                x.className += " responsive";
                button.style.display = "block";
            } else {
                x.className = "collapse navbar-collapse";
            }
        }
    </script>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>

    <script>
        $(document).on('click', '.navbar-collapse.in', function(e) {
            if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') {
                $(this).collapse('hide');
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            centerMode: true,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 430,
                        settings: {
                            slidesToShow: 1,
                            centerMode: false,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
