<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kayu Jaya - Supplier & Penjualan Kayu Berkualitas</title>
    <meta name="description" content="Kayu Jaya - Penyedia dan penjualan kayu berkualitas tinggi dengan harga terbaik">

    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700,800" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background-color: #F5F0EB;
            color: #1f2937;
            /* text-gray-800 */
        }

        :root {
            --wood-dark: #3E2723;
            --wood-medium: #5D4037;
            --wood-light: #8D6E63;
            --wood-gold: #D4A574;
            --wood-cream: #F5F0EB;
            --accent-orange: #E67E22;
            --accent-gold: #F39C12;
        }

        /* Custom Utility Classes to match Tailwind Colors */
        .text-wood-dark {
            color: var(--wood-dark) !important;
        }

        .text-wood-gold {
            color: var(--wood-gold) !important;
        }

        .bg-wood-dark {
            background-color: var(--wood-dark) !important;
        }

        .bg-wood-cream {
            background-color: var(--wood-cream) !important;
        }

        .object-fit-cover {
            object-fit: cover;
        }

        /* Custom Spacing & Sizing */
        .min-vh-100 {
            min-height: 100vh;
        }

        .w-100 {
            width: 100% !important;
        }

        .h-100 {
            height: 100% !important;
        }

        /* Remove link underlines */
        a {
            text-decoration: none;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(2deg);
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(-2deg);
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(212, 165, 116, 0.3);
            }

            50% {
                box-shadow: 0 0 40px rgba(212, 165, 116, 0.6);
            }
        }

        @keyframes slide-up {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scale-in {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes wave {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        @keyframes rotate-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 7s ease-in-out infinite;
            animation-delay: 1s;
        }

        .animate-pulse-glow {
            animation: pulse-glow 3s ease-in-out infinite;
        }

        .animate-wave {
            animation: wave 15s linear infinite;
        }

        .animate-shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }

        .animate-rotate-slow {
            animation: rotate-slow 20s linear infinite;
        }

        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .scroll-animate.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-animate-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .scroll-animate-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .scroll-animate-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .scroll-animate-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .image-hover-zoom {
            overflow: hidden;
        }

        .image-hover-zoom img {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .image-hover-zoom:hover img {
            transform: scale(1.15);
        }

        .gradient-text {
            background: linear-gradient(135deg, #D4A574 0%, #E67E22 50%, #F39C12 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #8D6E63, #5D4037);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #D4A574, #8D6E63);
        }

        .btn-wood {
            background: linear-gradient(135deg, #5D4037 0%, #3E2723 100%);
            position: relative;
            overflow: hidden;
            box-shadow: inset 0 2px 5px rgba(255, 255, 255, 0.1), 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-wood::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: all 0.5s ease;
        }

        .btn-wood:hover::before {
            left: 100%;
        }

        .btn-wood:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(62, 39, 35, 0.4);
            color: white;
        }

        .nav-transparent {
            background: transparent;
            transition: all 0.3s ease;
        }

        .nav-solid {
            background: rgba(62, 39, 35, 0.95);
            backdrop-filter: blur(10px);
        }

        .particle {
            position: absolute;
            width: 10px;
            height: 10px;
            background: rgba(212, 165, 116, 0.5);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }

        .testimonial-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8f4ef 100%);
            border: 1px solid rgba(212, 165, 116, 0.2);
        }

        .product-card {
            background: white;
            border: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .product-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #D4A574, #E67E22, #D4A574);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .product-card:hover::after {
            transform: scaleX(1);
        }

        .input-wood {
            border: 2px solid #e0d5cb;
            transition: all 0.3s ease;
        }

        .input-wood:focus {
            border-color: #D4A574;
            box-shadow: 0 0 0 4px rgba(212, 165, 116, 0.15);
            outline: none;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .delay-500 {
            animation-delay: 0.5s;
        }

        .bg-wood-pattern {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(212, 165, 116, 0.1) 2px, transparent 2px),
                radial-gradient(circle at 75% 75%, rgba(212, 165, 116, 0.1) 2px, transparent 2px);
            background-size: 60px 60px;
        }

        .wood-grain-overlay {
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.08'/%3E%3C/svg%3E");
            pointer-events: none;
        }

        /* --- New Hover Effects --- */

        /* Keunggulan Hover */
        .advantage-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .advantage-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15) !important;
            border-color: var(--wood-gold) !important;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .advantage-card:hover .advantage-icon {
            background-color: var(--wood-gold) !important;
            transform: scale(1.1) rotate(5deg);
        }

        .advantage-card:hover .advantage-icon svg {
            color: #3E2723 !important;
        }

        /* Gallery Hover */
        .gallery-card {
            overflow: hidden;
        }

        .gallery-card img {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gallery-card:hover img {
            transform: scale(1.1);
        }

        .gallery-card .overlay-content {
            transition: all 0.4s ease;
            background: linear-gradient(to top, rgba(62, 39, 35, 0.9), transparent) !important;
        }

        .gallery-card:hover .overlay-content {
            padding-bottom: 2rem !important;
        }

        /* Contact Info Hover */
        .contact-info-item {
            transition: all 0.3s ease;
            padding: 15px;
            border-radius: 15px;
            border: 1px solid transparent;
        }

        .contact-info-item:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(212, 165, 116, 0.3);
            transform: translateX(10px);
        }

        .contact-info-item:hover .icon-box {
            background-color: white !important;
            color: var(--wood-gold) !important;
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(212, 165, 116, 0.5);
        }

        .icon-box {
            transition: all 0.3s ease;
        }

        /* Navbar Customization */
        .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: var(--wood-gold);
        }

        /* Mobile Responsive Adjustments */
        @media (max-width: 767.98px) {
            .about-img {
                height: 300px !important;
            }

            #hidesvg {
                display: none !important;
            }



            .gallery-video {
                height: 250px !important;
            }

            .gallery-item {
                min-height: 15rem !important;
            }

            /* Prevent hero content cutoff on small screens */
            #beranda {
                min-height: auto !important;
                padding-top: 7rem !important;
                padding-bottom: 4rem !important;
                height: auto !important;
            }

            .circle-edit {
                display: none !important;
            }
        }
    </style>
</head>

<body class="font-poppins">

    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-md fixed-top nav-transparent py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 48px; height: 48px; background: linear-gradient(to bottom right, #D4A574, #3E2723);">
                    <span class="text-white fw-bold fs-4">K</span>
                </div>
                <div class="lh-1">
                    <h1 class="fs-4 fw-bold text-white m-0">Kayu<span class="text-wood-gold">Jaya</span></h1>
                    <small class="text-white-50" style="font-size: 0.75rem;">Supplier Kayu Terpercaya</small>
                </div>
            </a>

            <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu">
                <svg class="w-8 h-8" style="width: 32px; height: 32px;" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav align-items-center gap-4">
                    <li class="nav-item"><a href="#beranda" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="#tentang" class="nav-link">Tentang</a></li>
                    <li class="nav-item"><a href="#produk" class="nav-link">Produk</a></li>
                    <li class="nav-item"><a href="#keunggulan" class="nav-link">Keunggulan</a></li>
                    <li class="nav-item"><a href="{{ route('artikel.show.all') }}" class="nav-link">Artikel</a></li>
                    <li class="nav-item"><a href="#galeri" class="nav-link">Galeri</a></li>
                    <li class="nav-item"><a href="#testimoni" class="nav-link">Testimoni</a></li>
                    <li class="nav-item">
                        <a href="#kontak" class="btn btn-wood text-white rounded-pill px-4 py-2 fw-semibold">Hubungi
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu (Offcanvas) -->
    <div class="offcanvas offcanvas-end bg-wood-dark text-white" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column align-items-center justify-content-center gap-4">
            <a href="#beranda" class="fs-2 fw-semibold text-white text-decoration-none hover-gold"
                data-bs-dismiss="offcanvas">Beranda</a>
            <a href="#tentang" class="fs-2 fw-semibold text-white text-decoration-none hover-gold"
                data-bs-dismiss="offcanvas">Tentang</a>
            <a href="#produk" class="fs-2 fw-semibold text-white text-decoration-none hover-gold"
                data-bs-dismiss="offcanvas">Produk</a>
            <a href="#keunggulan" class="fs-2 fw-semibold text-white text-decoration-none hover-gold"
                data-bs-dismiss="offcanvas">Keunggulan</a>
            <a href="#galeri" class="fs-2 fw-semibold text-white text-decoration-none hover-gold"
                data-bs-dismiss="offcanvas">Galeri</a>
            <a href="#testimoni" class="fs-2 fw-semibold text-white text-decoration-none hover-gold"
                data-bs-dismiss="offcanvas">Testimoni</a>
            <a href="#kontak" class="fs-2 fw-semibold text-white text-decoration-none hover-gold"
                data-bs-dismiss="offcanvas">Kontak</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="beranda"
        class="position-relative min-vh-100 d-flex align-items-center justify-content-center overflow-hidden py-5">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="https://images.unsplash.com/photo-1541123603104-512919d6a96c?w=1920&q=80" alt="Wood Background"
                class="w-100 h-100 object-fit-cover">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: linear-gradient(to right, rgba(62,39,35,0.95), rgba(62,39,35,0.8), rgba(62,39,35,0.6));">
            </div>
        </div>

        <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden pe-none">
            <div class="particle animate-float" style="top: 20%; left: 10%; width: 20px; height: 20px;"></div>
            <div class="particle animate-float-delayed" style="top: 40%; right: 15%; width: 15px; height: 15px;">
            </div>
            <div class="particle animate-float" style="top: 60%; left: 20%; width: 12px; height: 12px;"></div>
            <div class="particle animate-float-delayed" style="top: 30%; right: 25%; width: 18px; height: 18px;">
            </div>
        </div>

        <div class="position-absolute top-50 translate-middle-y rounded-circle border border-4 animate-rotate-slow circle-edit"
            style="left: -5rem; width: 16rem; height: 16rem; border-color: rgba(212, 165, 116, 0.3);"></div>
        <div class="position-absolute bottom-0 rounded-circle border border-4 animate-rotate-slow circle-edit"
            style="right: -5rem; bottom: 25%; width: 12rem; height: 12rem; border-color: rgba(212, 165, 116, 0.2); animation-direction: reverse;">
        </div>

        <div class="position-relative z-10 container text-center">
            <div class="vstack gap-4 align-items-center">
                <div class="scroll-animate d-inline-flex align-items-center gap-2 px-4 py-2 rounded-pill border border-white border-opacity-25"
                    style="background: rgba(255,255,255,0.1); backdrop-filter: blur(4px);">
                    <span class="rounded-circle bg-wood-gold animate-pulse" style="width: 8px; height: 8px;"></span>
                    <span class="text-white text-opacity-75 fw-medium small">Supplier Kayu Berkualitas Sejak
                        1995</span>
                </div>

                <h1 class="scroll-animate display-5 display-md-3 fw-bold text-white lh-1">
                    Kualitas Kayu
                    <span class="d-block gradient-text">Terbaik Untuk</span>
                    <span class="d-block text-wood-gold">Proyek Anda</span>
                </h1>

                <p class="scroll-animate delay-100 text-white text-opacity-75 fs-5 mx-auto" style="max-width: 42rem;">
                    Menyediakan berbagai jenis kayu berkualitas tinggi dengan harga kompetitif.
                    Layanan profesional & pengiriman ke seluruh Indonesia.
                </p>

                <div
                    class="scroll-animate delay-200 d-flex flex-column flex-sm-row align-items-center justify-content-center gap-3">
                    <a href="#produk" class="btn btn-wood rounded-pill px-5 py-3 text-white fw-semibold fs-5">
                        Lihat Produk
                        <svg class="ms-2" style="width: 20px; height: 20px;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#kontak"
                        class="btn rounded-pill px-5 py-3 text-white fw-semibold fs-5 border border-2 border-white hover-bg-white hover-text-dark transition-all"
                        style="background: transparent;">
                        Hubungi Kami
                    </a>
                </div>

                <div class="scroll-animate delay-300 row w-100 pt-5 g-4">
                    <div class="col-6 col-md-3 text-center">
                        <div class="display-4 fw-bold text-wood-gold counter" data-target="25">0</div>
                        <div class="text-white text-opacity-75 mt-2">Tahun Pengalaman</div>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="display-4 fw-bold text-wood-gold counter" data-target="5000">0</div>
                        <div class="text-white text-opacity-75 mt-2">Proyek Selesai</div>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="display-4 fw-bold text-wood-gold counter" data-target="10000">0</div>
                        <div class="text-white text-opacity-75 mt-2">Pelanggan Puas</div>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <div class="display-4 fw-bold text-wood-gold counter" data-target="50">0</div>
                        <div class="text-white text-opacity-75 mt-2">Jenis Kayu</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-absolute bottom-0 start-0 w-100" id="hidesvg">
            <svg class="w-100" style="height: 8rem;" viewBox="0 0 1440 120" fill="none">
                <path
                    d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="#F5F0EB" />
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-5 bg-wood-cream bg-wood-pattern">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 scroll-animate-left position-relative">
                    <div class="position-relative">
                        <img src="{{ asset('img/headline.png') }}" alt="Tentang Kayu Jaya"
                            class="rounded-4 shadow-lg w-100 object-fit-cover about-img" style="height: 500px;">
                        <div class="position-absolute bg-white rounded-4 shadow p-4 d-none d-md-block animate-float"
                            style="bottom: -1.5rem; right: -1.5rem; max-width: 20rem;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 3.5rem; height: 3.5rem; background-color: rgba(212, 165, 116, 0.2);">
                                    <svg class="text-wood-gold" style="width: 2rem; height: 2rem;" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="fs-4 fw-bold text-wood-dark">100%</div>
                                    <div class="text-secondary small">Kayu Berkualitas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute border border-4 rounded-4"
                        style="top: -1rem; left: -1rem; width: 6rem; height: 6rem; border-color: rgba(212, 165, 116, 0.3);">
                    </div>
                    <div class="position-absolute rounded-circle"
                        style="bottom: -1rem; right: -1rem; width: 4rem; height: 4rem; background-color: rgba(212, 165, 116, 0.2); z-index: -1;">
                    </div>
                </div>

                <div class="col-lg-6 scroll-animate-right">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-4"
                        style="background-color: rgba(212, 165, 116, 0.1);">
                        <span class="rounded-circle bg-wood-gold" style="width: 8px; height: 8px;"></span>
                        <span class="text-wood-gold fw-semibold small">TENTANG KAMI</span>
                    </div>

                    <h2 class="display-5 fw-bold text-wood-dark mb-4 lh-sm">
                        Mengapa Memilih
                        <span class="gradient-text fw-bold">Kayu Jaya?</span>
                    </h2>

                    <p class="text-secondary fs-5 mb-5 lh-lg">
                        Kayu Jaya adalah supplier kayu terpercaya yang telah berpengalaman lebih dari 25 tahun dalam
                        industri kayu.
                        Kami berkomitmen untuk memberikan kualitas terbaik dengan harga yang kompetitif untuk setiap
                        proyek Anda.
                    </p>

                    <div class="vstack gap-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 2.5rem; height: 2.5rem; background-color: rgba(212, 165, 116, 0.2);">
                                <svg class="text-wood-gold" style="width: 1.25rem; height: 1.25rem;" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="fw-semibold text-wood-dark h5">Kayu Berkualitas Tinggi</h4>
                                <p class="text-secondary small mb-0">Setiap jenis kayu dipilih dengan teliti untuk
                                    kualitas
                                    terbaik</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 2.5rem; height: 2.5rem; background-color: rgba(212, 165, 116, 0.2);">
                                <svg class="text-wood-gold" style="width: 1.25rem; height: 1.25rem;" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="fw-semibold text-wood-dark h5">Harga Bersaing</h4>
                                <p class="text-secondary small mb-0">Harga langsung dari petani kayu tanpa perantara
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 2.5rem; height: 2.5rem; background-color: rgba(212, 165, 116, 0.2);">
                                <svg class="text-wood-gold" style="width: 1.25rem; height: 1.25rem;" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="fw-semibold text-wood-dark h5">Pengiriman Seluruh Indonesia</h4>
                                <p class="text-secondary small mb-0">Layanan pengiriman cepat dan aman ke seluruh
                                    nusantara
                                </p>
                            </div>
                        </div>
                    </div>

                    <a href="#kontak"
                        class="d-inline-flex align-items-center gap-2 text-wood-gold fw-semibold mt-4 text-decoration-none"
                        style="transition: gap 0.3s;">
                        Hubungi Kami
                        <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produk" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-4"
                    style="background-color: rgba(212, 165, 116, 0.1);">
                    <span class="rounded-circle bg-wood-gold" style="width: 8px; height: 8px;"></span>
                    <span class="text-wood-gold fw-semibold small">PRODUK KAMI</span>
                </div>
                <h2 class="display-5 fw-bold text-wood-dark mb-4">
                    Berbagai Jenis Kayu
                    <span class="gradient-text fw-bold">Berkualitas</span>
                </h2>
                <p class="text-secondary fs-5 mx-auto" style="max-width: 42rem;">
                    Kami menyediakan berbagai jenis kayu untuk kebutuhan konstruksi, furnitur, dan proyek lainnya
                </p>
            </div>

            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-6 col-lg-4">
                    <div
                        class="scroll-animate product-card card-hover rounded-4 overflow-hidden position-relative h-100">
                        <div class="image-hover-zoom" style="height: 16rem;">
                            <img src="{{ asset('img/produk/produk1.jpg') }}" alt="Kayu Jati"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="h4 fw-bold text-wood-dark mb-0">Kayu Jati</h3>
                                <span class="badge rounded-pill text-wood-gold"
                                    style="background-color: rgba(212, 165, 116, 0.2);">Best Seller</span>
                            </div>
                            <p class="text-secondary small mb-4">Kayu jati berkualitas premium dengan ketahanan
                                terbaik,
                                cocok untuk furnitur dan konstruksi.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-wood-gold fw-bold">Mulai dari Rp 15.000.000/m³</span>
                                <button
                                    class="btn btn-sm rounded-circle bg-wood-dark text-white d-flex align-items-center justify-content-center"
                                    style="width: 2.5rem; height: 2.5rem;">
                                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-6 col-lg-4">
                    <div
                        class="scroll-animate delay-100 product-card card-hover rounded-4 overflow-hidden position-relative h-100">
                        <div class="image-hover-zoom" style="height: 16rem;">
                            <img src="{{ asset('img/produk/produk2.jpg') }}" alt="Kayu Merbau"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="h4 fw-bold text-wood-dark mb-0">Kayu Merbau</h3>
                                <span class="badge rounded-pill bg-success bg-opacity-10 text-success">Tahan
                                    Rayap</span>
                            </div>
                            <p class="text-secondary small mb-4">Kayu merbau dengan kekuatan ekstra dan ketahanan
                                terhadap
                                rayap, ideal untuk outdoor.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-wood-gold fw-bold">Mulai dari Rp 12.000.000/m³</span>
                                <button
                                    class="btn btn-sm rounded-circle bg-wood-dark text-white d-flex align-items-center justify-content-center"
                                    style="width: 2.5rem; height: 2.5rem;">
                                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-6 col-lg-4">
                    <div
                        class="scroll-animate delay-200 product-card card-hover rounded-4 overflow-hidden position-relative h-100">
                        <div class="image-hover-zoom" style="height: 16rem;">
                            <img src="{{ asset('img/produk/produk3.jpg') }}" alt="Kayu Sengon"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="h4 fw-bold text-wood-dark mb-0">Kayu Sengon</h3>
                                <span
                                    class="badge rounded-pill bg-primary bg-opacity-10 text-primary">Terjangkau</span>
                            </div>
                            <p class="text-secondary small mb-4">Kayu sengon dengan harga ekonomis, cocok untuk
                                kebutuhan
                                Triplek dan papan.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-wood-gold fw-bold">Mulai dari Rp 3.500.000/m³</span>
                                <button
                                    class="btn btn-sm rounded-circle bg-wood-dark text-white d-flex align-items-center justify-content-center"
                                    style="width: 2.5rem; height: 2.5rem;">
                                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-6 col-lg-4">
                    <div
                        class="scroll-animate delay-300 product-card card-hover rounded-4 overflow-hidden position-relative h-100">
                        <div class="image-hover-zoom" style="height: 16rem;">
                            <img src="{{ asset('img/produk/produk4.jpg') }}" alt="Kayu Kelapa"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="h4 fw-bold text-wood-dark mb-0">Kayu Kelapa</h3>
                                <span class="badge rounded-pill bg-warning bg-opacity-10 text-warning">Alamiah</span>
                            </div>
                            <p class="text-secondary small mb-4">Kayu kelapa dengan tekstur unik dan alami, sempurna
                                untuk
                                dekorasi dan kerajinan.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-wood-gold fw-bold">Mulai dari Rp 2.500.000/m³</span>
                                <button
                                    class="btn btn-sm rounded-circle bg-wood-dark text-white d-flex align-items-center justify-content-center"
                                    style="width: 2.5rem; height: 2.5rem;">
                                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-md-6 col-lg-4">
                    <div
                        class="scroll-animate delay-400 product-card card-hover rounded-4 overflow-hidden position-relative h-100">
                        <div class="image-hover-zoom" style="height: 16rem;">
                            <img src="{{ asset('img/produk/produk5.jpg') }}" alt="Kayu Mahoni"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="h4 fw-bold text-wood-dark mb-0">Kayu Mahoni</h3>
                                <span class="badge rounded-pill bg-danger bg-opacity-10 text-danger">Premium</span>
                            </div>
                            <p class="text-secondary small mb-4">Kayu mahoni dengan warna merah kecokelatan yang indah,
                                favorit untuk furnitur kelas atas.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-wood-gold fw-bold">Mulai dari Rp 10.000.000/m³</span>
                                <button
                                    class="btn btn-sm rounded-circle bg-wood-dark text-white d-flex align-items-center justify-content-center"
                                    style="width: 2.5rem; height: 2.5rem;">
                                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-md-6 col-lg-4">
                    <div
                        class="scroll-animate delay-500 product-card card-hover rounded-4 overflow-hidden position-relative h-100">
                        <div class="image-hover-zoom" style="height: 16rem;">
                            <img src="{{ asset('img/produk/produk6.jpg') }}" alt="Kayu Borneo"
                                class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="h4 fw-bold text-wood-dark mb-0">Kayu Borneo</h3>
                                <span class="badge rounded-pill text-white"
                                    style="background-color: #6f42c1;">Kuat</span>
                            </div>
                            <p class="text-secondary small mb-4">Kayu borneo dengan kekuatan tinggi, cocok untuk
                                konstruksi berat dan balok bangunan.</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="text-wood-gold fw-bold">Mulai dari Rp 8.000.000/m³</span>
                                <button
                                    class="btn btn-sm rounded-circle bg-wood-dark text-white d-flex align-items-center justify-content-center"
                                    style="width: 2.5rem; height: 2.5rem;">
                                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#kontak"
                    class="btn btn-wood rounded-pill px-5 py-3 text-white fw-semibold d-inline-flex align-items-center gap-2">
                    Lihat Semua Produk
                    <svg style="width: 1.25rem; height: 1.25rem;" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section id="keunggulan" class="py-5 bg-wood-dark position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23D4A574\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');opacity: 0.3;">
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 wood-grain-overlay"></div>
        </div>

        <div class="container py-5 position-relative z-10">
            <div class="text-center mb-5">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-4"
                    style="background-color: rgba(212, 165, 116, 0.2);">
                    <span class="rounded-circle bg-wood-gold" style="width: 8px; height: 8px;"></span>
                    <span class="text-wood-gold fw-semibold small">KELEBIHAN KAMI</span>
                </div>
                <h2 class="display-5 fw-bold text-white mb-4">
                    Mengapa Memilih
                    <span class="gradient-text fw-bold">Kayu Jaya?</span>
                </h2>
                <p class="text-white text-opacity-75 fs-5 mx-auto" style="max-width: 42rem;">
                    Kami memberikan layanan terbaik untuk memastikan kepuasan pelanggan dalam setiap transaksi
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="scroll-animate advantage-card h-100 rounded-4 p-4 text-center border border-white border-opacity-10"
                        style="background: rgba(255,255,255,0.05); backdrop-filter: blur(4px);">
                        <div class="rounded-circle advantage-icon transition-all d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 4rem; height: 4rem; background-color: rgba(212, 165, 116, 0.2);">
                            <svg class="text-wood-gold" style="width: 2rem; height: 2rem;" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="h5 fw-bold text-white mb-3">Kualitas Terjamin</h3>
                        <p class="text-white text-opacity-50 small mb-0">Setiap kayu dipilih dengan teliti dan melalui
                            proses quality
                            control yang ketat</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="scroll-animate advantage-card delay-100 h-100 rounded-4 p-4 text-center border border-white border-opacity-10"
                        style="background: rgba(255,255,255,0.05); backdrop-filter: blur(4px);">
                        <div class="rounded-circle advantage-icon transition-all d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 4rem; height: 4rem; background-color: rgba(212, 165, 116, 0.2);">
                            <svg class="text-wood-gold" style="width: 2rem; height: 2rem;" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="h5 fw-bold text-white mb-3">Harga Pabrik</h3>
                        <p class="text-white text-opacity-50 small mb-0">Harga langsung dari sumber tanpa perantara,
                            sehingga lebih
                            terjangkau</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="scroll-animate advantage-card delay-200 h-100 rounded-4 p-4 text-center border border-white border-opacity-10"
                        style="background: rgba(255,255,255,0.05); backdrop-filter: blur(4px);">
                        <div class="rounded-circle advantage-icon transition-all d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 4rem; height: 4rem; background-color: rgba(212, 165, 116, 0.2);">
                            <svg class="text-wood-gold" style="width: 2rem; height: 2rem;" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="h5 fw-bold text-white mb-3">Pengiriman Cepat</h3>
                        <p class="text-white text-opacity-50 small mb-0">Layanan pengiriman cepat dan aman ke seluruh
                            Indonesia dengan
                            armada sendiri</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="scroll-animate advantage-card delay-300 h-100 rounded-4 p-4 text-center border border-white border-opacity-10"
                        style="background: rgba(255,255,255,0.05); backdrop-filter: blur(4px);">
                        <div class="rounded-circle advantage-icon transition-all d-flex align-items-center justify-content-center mx-auto mb-4"
                            style="width: 4rem; height: 4rem; background-color: rgba(212, 165, 116, 0.2);">
                            <svg class="text-wood-gold" style="width: 2rem; height: 2rem;" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="h5 fw-bold text-white mb-3">Tim Profesional</h3>
                        <p class="text-white text-opacity-50 small mb-0">Tim yang berpengalaman dan siap membantu Anda
                            24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="galeri" class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-4"
                    style="background-color: rgba(212, 165, 116, 0.1);">
                    <span class="rounded-circle bg-wood-gold" style="width: 8px; height: 8px;"></span>
                    <span class="text-wood-gold fw-semibold small">GALERI PROYEK</span>
                </div>
                <h2 class="display-5 fw-bold text-wood-dark mb-4">
                    Dokumentasi
                    <span class="gradient-text fw-bold">Pekerjaan Kami</span>
                </h2>
                <p class="text-secondary fs-5 mx-auto" style="max-width: 42rem;">
                    Lihat bagaimana kami memproses kayu berkualitas hingga sampai ke tangan pelanggan
                </p>
            </div>

            <!-- Video Container -->
            <div class="scroll-animate rounded-4 overflow-hidden shadow-lg mb-5 position-relative">
                <video class="w-100 object-fit-cover gallery-video" style="height: 400px;" controls
                    poster="{{ asset('img/proyek/proyek4.jpg') }}">
                    <source src="{{ asset('img/videoProyek.mp4') }}" type="video/mp4">
                </video>
            </div>

            <!-- Image Grid -->
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="scroll-animate delay-100 position-relative overflow-hidden rounded-4 h-100 gallery-item gallery-card"
                        style="min-height: 20rem; max-height: 5rem;">
                        <img src="{{ asset('img/proyek/proyek2.jpg') }}" alt="Gudang Kayu"
                            class="w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 overlay-content"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                            <p class="text-white fw-semibold mb-0">Gudang Penyimpanan</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="scroll-animate delay-200 position-relative overflow-hidden rounded-4 h-100 gallery-item gallery-card"
                        style="min-height: 20rem;">
                        <img src="{{ asset('img/proyek/proyek1.jpg') }}" alt="Proses Pemotongan"
                            class="w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 overlay-content"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                            <p class="text-white fw-semibold mb-0">Pemotongan</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="scroll-animate delay-300 position-relative overflow-hidden rounded-4 h-100 gallery-item gallery-card"
                        style="min-height: 20rem;">
                        <img src="{{ asset('img/proyek/proyek3.jpg') }}" alt="Pengiriman"
                            class="w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 overlay-content"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                            <p class="text-white fw-semibold mb-0">Pengiriman</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="scroll-animate delay-400 position-relative overflow-hidden rounded-4 h-100 gallery-item gallery-card"
                        style="min-height: 20rem;">
                        <img src="{{ asset('img/proyek/proyek4.jpg') }}" alt="Detail Kayu"
                            class="w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 overlay-content"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                            <p class="text-white fw-semibold mb-0">Detail Serat</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="scroll-animate delay-500 position-relative overflow-hidden rounded-4 h-100 gallery-item gallery-card"
                        style="min-height: 20rem;">
                        <img src="{{ asset('img/proyek/proyek5.jpg') }}" alt="Proyek Konstruksi"
                            class="w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 overlay-content"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                            <p class="text-white fw-semibold mb-0">Proyek Konstruksi</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="scroll-animate delay-400 position-relative overflow-hidden rounded-4 h-100 gallery-item gallery-card"
                        style="min-height: 20rem;">
                        <img src="{{ asset('img/proyek/proyek2.jpg') }}" alt="Detail Kayu"
                            class="w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 overlay-content"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                            <p class="text-white fw-semibold mb-0">Detail Serat</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="scroll-animate delay-500 position-relative overflow-hidden rounded-4 h-100 gallery-item gallery-card"
                        style="min-height: 20rem;">
                        <img src="{{ asset('img/proyek/proyek6.jpg') }}" alt="Proyek Konstruksi"
                            class="w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 w-100 p-4 overlay-content"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                            <p class="text-white fw-semibold mb-0">Proyek Konstruksi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimoni" class="py-5 bg-wood-cream">
        <div class="container py-5">
            <div class="text-center mb-5">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-4"
                    style="background-color: rgba(212, 165, 116, 0.1);">
                    <span class="rounded-circle bg-wood-gold" style="width: 8px; height: 8px;"></span>
                    <span class="text-wood-gold fw-semibold small">TESTIMONI</span>
                </div>
                <h2 class="display-5 fw-bold text-wood-dark mb-4">
                    Apa Kata
                    <span class="gradient-text fw-bold">Pelanggan Kami?</span>
                </h2>
                <p class="text-secondary fs-5 mx-auto" style="max-width: 42rem;">Kepuasan pelanggan adalah prioritas
                    utama kami</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="scroll-animate testimonial-card card-hover rounded-4 p-4 h-100">
                        <div class="d-flex align-items-center gap-1 mb-3 text-wood-gold">
                            @for ($i = 0; $i < 5; $i++)
                                <svg style="width: 1.25rem; height: 1.25rem;" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <p class="text-secondary mb-4 fst-italic">"Sangat puas dengan kualitas kayu dari Kayu Jaya.
                            Warna dan
                            teksturnya sesuai dengan yang saya harapkan. Pokoknya recomended!"</p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-wood-dark d-flex align-items-center justify-content-center text-white fw-bold"
                                style="width: 3rem; height: 3rem;">
                                AS</div>
                            <div>
                                <h4 class="fw-semibold text-wood-dark h6 mb-0">Andreas Susanto</h4>
                                <p class="text-secondary small mb-0">Pengusaha Furnitur</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="scroll-animate delay-100 testimonial-card card-hover rounded-4 p-4 h-100">
                        <div class="d-flex align-items-center gap-1 mb-3 text-wood-gold">
                            @for ($i = 0; $i < 5; $i++)
                                <svg style="width: 1.25rem; height: 1.25rem;" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <p class="text-secondary mb-4 fst-italic">"Harga sangat bersaing dan pengiriman cepat. Sudah
                            langganan
                            di sini selama 5 tahun dan tidak pernah kecewa."</p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-wood-gold d-flex align-items-center justify-content-center text-white fw-bold"
                                style="width: 3rem; height: 3rem;">
                                BP</div>
                            <div>
                                <h4 class="fw-semibold text-wood-dark h6 mb-0">Budi Prasetyo</h4>
                                <p class="text-secondary small mb-0">Kontraktor Bangunan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="scroll-animate delay-200 testimonial-card card-hover rounded-4 p-4 h-100">
                        <div class="d-flex align-items-center gap-1 mb-3 text-wood-gold">
                            @for ($i = 0; $i < 5; $i++)
                                <svg style="width: 1.25rem; height: 1.25rem;" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                        <p class="text-secondary mb-4 fst-italic">"Pelayanan ramah dan profesional. Kayu yang dikirim
                            selalu dalam kondisi prima. Sukses terus Kayu Jaya!"</p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-wood-dark d-flex align-items-center justify-content-center text-white fw-bold"
                                style="width: 3rem; height: 3rem;">
                                DR</div>
                            <div>
                                <h4 class="fw-semibold text-wood-dark h6 mb-0">Dian Rahmawati</h4>
                                <p class="text-secondary small mb-0">Arsitek Interior</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-5 bg-wood-dark position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10">
            <div class="position-absolute top-0 start-0 w-100 h-100 wood-grain-overlay"></div>
        </div>

        <div class="container py-5 position-relative z-10">
            <div class="row g-5">
                <div class="col-lg-5 text-white">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-4"
                        style="background-color: rgba(212, 165, 116, 0.2);">
                        <span class="rounded-circle bg-wood-gold" style="width: 8px; height: 8px;"></span>
                        <span class="text-wood-gold fw-semibold small">HUBUNGI KAMI</span>
                    </div>
                    <h2 class="display-5 fw-bold mb-4">Siap Memulai <span class="text-wood-gold">Proyek Anda?</span>
                    </h2>
                    <p class="text-white-50 fs-5 mb-5">Konsultasikan kebutuhan kayu Anda dengan tim ahli kami. Dapatkan
                        penawaran terbaik hari ini.</p>

                    <div class="vstack gap-4">
                        <div class="d-flex gap-3 contact-info-item">
                            <div class="rounded-circle bg-wood-gold d-flex align-items-center justify-content-center flex-shrink-0 icon-box"
                                style="width: 3rem; height: 3rem; color: #3E2723;">
                                <svg style="width: 1.5rem; height: 1.5rem;" fill="white" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Alamat</h5>
                                <p class="text-white-50 mb-0">Jl. Industri Kayu No. 123<br>Jepara, Jawa Tengah 59411
                                </p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 contact-info-item">
                            <div class="rounded-circle bg-wood-gold d-flex align-items-center justify-content-center flex-shrink-0 icon-box"
                                style="width: 3rem; height: 3rem; color: #3E2723;">
                                <svg style="width: 1.5rem; height: 1.5rem;" fill="white" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 12.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Telepon & WhatsApp</h5>
                                <p class="text-white-50 mb-0">+62 812 3456 7890<br>+62 291 1234 567</p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 contact-info-item">
                            <div class="rounded-circle bg-wood-gold d-flex align-items-center justify-content-center flex-shrink-0 icon-box"
                                style="width: 3rem; height: 3rem; color: #3E2723;">
                                <svg style="width: 1.5rem; height: 1.5rem;" fill="white" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Email</h5>
                                <p class="text-white-50 mb-0">info@kayujaya.com<br>sales@kayujaya.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="bg-white rounded-4 p-4 p-md-5 shadow-lg h-100">
                        <h3 class="fw-bold text-wood-dark mb-4">Kirim Permintaan</h3>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label text-secondary small fw-semibold">Nama Lengkap</label>
                                    <input type="text" class="form-control input-wood py-2"
                                        placeholder="Masukkan nama anda">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-secondary small fw-semibold">Email</label>
                                    <input type="email" class="form-control input-wood py-2"
                                        placeholder="alamat@email.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-secondary small fw-semibold">Nomor Telepon</label>
                                    <input type="tel" class="form-control input-wood py-2" placeholder="+62...">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label text-secondary small fw-semibold">Jenis Kayu
                                        (Opsional)</label>
                                    <select class="form-select input-wood py-2">
                                        <option selected>Pilih jenis kayu</option>
                                        <option value="1">Jati</option>
                                        <option value="2">Merbau</option>
                                        <option value="3">Sengon</option>
                                        <option value="4">Mahoni</option>
                                        <option value="5">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label text-secondary small fw-semibold">Pesan /
                                        Permintaan</label>
                                    <textarea class="form-control input-wood" rows="4" placeholder="Tuliskan detail kebutuhan proyek Anda..."></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit"
                                        class="btn btn-wood w-100 py-3 text-white fw-bold rounded-3">
                                        Kirim Permintaan
                                        <svg class="ms-2" style="width: 1.25rem; height: 1.25rem;" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5 pt-5 border-top border-white border-opacity-10">
            <div class="text-center text-white-50 small">
                <p class="mb-0">&copy; 2026 PT Sintaks Media Solusindo. All rights reserved.</p>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Animation Observer (Memunculkan elemen saat di-scroll)
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const animatedElements = document.querySelectorAll(
                '.scroll-animate, .scroll-animate-left, .scroll-animate-right');
            animatedElements.forEach(el => observer.observe(el));

            // 2. Navbar Scroll Effect
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.remove('nav-transparent');
                    navbar.classList.add('nav-solid', 'shadow');
                } else {
                    navbar.classList.add('nav-transparent');
                    navbar.classList.remove('nav-solid', 'shadow');
                }
            });

            // 3. Number Counter Animation
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const duration = 2000;
                const increment = target / (duration / 16);

                let current = 0;
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target;
                    }
                };

                const counterObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            counterObserver.unobserve(entry.target);
                        }
                    });
                });
                counterObserver.observe(counter);
            });
        });
    </script>
</body>

</html>
