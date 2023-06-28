<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FP E-Commerce</title>

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
                <h1 class="text-logo" style="color:#8d6e63">FP</h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/show">Belanja</a>
                    </li>
                </ul>
                <div class="slicing-color"></div>
                @if (Route::has('login'))
                    @auth
                        <a class="btn btn-light" href="{{ route('logout') }}">
                            <img src="assets/img/homepage/icons8-login-50.png" width="20" height="20">
                            Keluar
                        </a>
                    @else
                        <a class="btn btn-light" href="/login">
                            <img src="assets/img/homepage/icons8-login-50.png" width="20" height="20">
                            Masuk
                        </a>
                        @if (Route::has('register'))
                            <a class="btn btn-light" href="/register">
                                <img src="assets/img/homepage/icons8-login-50.png" width="20" height="20">
                                Daftar
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        </div>
    </nav>

    <div style="background-color: #f6f7fb">
        <div class="container">
            <div class="row">
                <div class="content1" id="content1">
                    <div class="col-7">
                        <h1>
                            "Kembali ke Keajaiban Fotografi Instan: <span>Temukan Dunia Polaroid</span> dengan Layanan
                            E-commerce Kami yang Eksklusif"
                        </h1>
                        <p>Jasa e-commerce Polaroid kami adalah platform online yang menghadirkan pengalaman fotografi
                            instan yang menyenangkan dan unik. Kami menyediakan berbagai produk dan layanan terkait
                            dengan kamera Polaroid, memungkinkan pengguna untuk menjelajahi dan membeli produk-produk
                            berkualitas tinggi dengan mudah melalui platform kami.
                        </p>
                        <div class="flex-button-content1">
                            <a class="btn text-white" href="/show" style="background-color: #8d6e63">Belanja Sekarang</a>
                        </div>
                    </div>

                    <div class="col-5">
                        <img src="assets/img/homepage/undraw_empty_cart_co35.svg">
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-inline">
                        <div class="m-3">
                            <h1 class="text-center">{{ $products->count() }}</h1>
                            <small>Produk</small>
                        </div>
                        <div class="m-3">
                            <h1 class="text-center">{{ $user->count() }}</h1>
                            <small>Pengguna</small>
                        </div>
                        <div class="m-3">
                            <h1 class="text-center">{{ $category->count() }}</h1>
                            <small>Kategori</small>
                        </div>
                    </div>
                </div>

                <div class="content3" id="content3">
                    <div class="flex-content3">
                        <div class="image-absolute">
                            <img class="circle-shapes1" src="assets/img/homepage/circle-shapes.png" width="200px"
                                style="margin: 0 0 0 0;">
                            <img class="circle-shapes2" src="assets/img/homepage/circle-shapes.png" width="300px"
                                style="margin: 0 0 0 1000px;">
                            <img class="hexagon" src="assets/img/homepage/hexagon-shapes.png" width="300px"
                                style="margin: 140px 0 0 440px;">
                            <img class="line" src="assets/img/homepage/line-shapes.png" width="350px"
                                style="margin: 390px 0 0 -30px;">
                        </div>
                        <div class="image-content3">
                            <img src="assets/img/homepage/">
                        </div>
                        <div class="text-content3">
                            <h5>FP</h5>
                            <h2> Marketplace Penyedia Jasa Foto Polaroid Di Indonesia </h2>
                            <p> Salah satu keunggulan jasa e-commerce kami adalah ketersediaan film Polaroid yang
                                lengkap. Pengguna dapat dengan mudah membeli film Polaroid dalam berbagai varian dan
                                ukuran, memastikan mereka selalu memiliki persediaan film yang cukup untuk mengabadikan
                                momen-momen berharga dalam bentuk cetakan langsung yang unik dan khas dari kamera
                                Polaroid.</p>
                        </div>
                    </div>
                </div>

                <div class="content4" id="content4">
                    <h5>PRODUK / JASA</h5>
                    <h2>PAKET PEMBELIAN</h2>
                    <div class="multiple-items">
                        @foreach ($products as $product)
                            <div class="card">
                                <img class="card-img-top" style="padding: 20px; height: 300px;"
                                    src="{{ asset('storage/images/' . $product->thumb_img) }}" alt="">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                                    <a href="{{ route('detail.product', $product->id) }}" class="btn btn-dark"
                                        style="width: 100%;">Lihat Detail</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="content5 d-flex" id="content5">
                    <div class="col-5 left">
                        <h5>Kenali kami</h5>
                        <h2>Pertanyaan yang Sering Diajukan</h2>
                    </div>
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
                </div>
            </div>
        </div>
    </div>

    <footer>
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
        <p class="alamat">FP E-Commerce</p>
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
