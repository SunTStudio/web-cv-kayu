<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Artikel - Portal Berita</title>
    <meta name="description" content="Berita dan Artikel terbaru seputar dunia kayu dan konstruksi">

    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700,800" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Menggunakan Style yang sama dengan Welcome.blade.php -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background-color: #F5F0EB;
            color: #1f2937;
        }

        :root {
            --wood-dark: #3E2723;
            --wood-medium: #5D4037;
            --wood-light: #8D6E63;
            --wood-gold: #D4A574;
            --wood-cream: #F5F0EB;
        }

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

        a {
            text-decoration: none;
        }

        .gradient-text {
            background: linear-gradient(135deg, #D4A574 0%, #E67E22 50%, #F39C12 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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

        .btn-wood:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(62, 39, 35, 0.4);
            color: white;
        }

        .nav-solid {
            background: rgba(62, 39, 35, 0.95);
            backdrop-filter: blur(10px);
        }

        /* Card Styles */
        .article-card {
            background: white;
            border: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 1rem;
            overflow: hidden;
            height: 100%;
        }

        .article-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .article-card::after {
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

        .article-card:hover::after {
            transform: scaleX(1);
        }

        .card-img-wrapper {
            height: 240px;
            overflow: hidden;
        }

        .card-img-wrapper img {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .article-card:hover .card-img-wrapper img {
            transform: scale(1.15);
        }
    </style>
</head>

<body class="font-poppins bg-wood-cream">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top nav-solid py-3 shadow">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px; background: linear-gradient(to bottom right, #D4A574, #3E2723);">
                    <span class="text-white fw-bold fs-5">K</span>
                </div>
                <div class="lh-1">
                    <h1 class="fs-5 fw-bold text-white m-0">Kayu<span class="text-wood-gold">Jaya</span></h1>
                </div>
            </a>

            <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <svg style="width: 24px; height: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-3">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-wood-gold fw-bold" href="{{ route('artikel.show.all') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-wood text-white rounded-pill px-4 py-2 fw-semibold btn-sm"
                            href="{{ route('artikel.index') }}">Login Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="position-relative py-5 bg-wood-dark overflow-hidden" style="margin-top: 76px;">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23D4A574\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');opacity: 0.3;">
            </div>
        </div>
        <div class="container position-relative z-10 text-center py-5">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill mb-4"
                style="background-color: rgba(212, 165, 116, 0.2);">
                <span class="rounded-circle bg-wood-gold" style="width: 8px; height: 8px;"></span>
                <span class="text-wood-gold fw-semibold small">BLOG & INFORMASI</span>
            </div>
            <h1 class="display-4 fw-bold text-white mb-3">
                Wawasan & Berita
                <span class="text-wood-gold">Terbaru</span>
            </h1>
            <p class="lead text-white-50 mx-auto" style="max-width: 600px;">
                Temukan informasi terkini seputar industri kayu, tips perawatan, dan inspirasi desain untuk proyek Anda.
            </p>
        </div>
    </header>

    <!-- Content -->
    <div class="container py-5 mb-5">
        <div class="row g-4">
            @forelse($artikel as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="article-card position-relative h-100 d-flex flex-column">
                        <div class="card-img-wrapper">
                            @if ($item->featured_image)
                                <img src="{{ asset('img/' . $item->featured_image) }}" alt="{{ $item->title }}">
                            @else
                                <div
                                    class="w-100 h-100 bg-secondary d-flex align-items-center justify-content-center text-white">
                                    <span class="fs-1">📷</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="badge rounded-pill bg-wood-dark text-white fw-normal px-3">Artikel</span>
                                <small class="text-secondary">{{ $item->created_at->format('d M Y') }}</small>
                            </div>

                            <h3 class="h5 fw-bold text-wood-dark mb-3">
                                <a href="{{ route('artikel.detail', $item->id) }}"
                                    class="text-decoration-none text-wood-dark stretched-link">
                                    {{ Str::limit($item->title, 50) }}
                                </a>
                            </h3>

                            <p class="text-secondary small mb-4 flex-grow-1" style="line-height: 1.6;">
                                {{ Str::limit($item->excerpt ?? strip_tags($item->content), 100) }}
                            </p>

                            <div class="d-flex align-items-center text-wood-gold fw-semibold small mt-auto">
                                Baca Selengkapnya
                                <svg class="ms-2" style="width: 16px; height: 16px;" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="py-5">
                        <div class="rounded-circle bg-wood-cream d-inline-flex align-items-center justify-content-center mb-3"
                            style="width: 80px; height: 80px;">
                            <svg class="text-wood-light" style="width: 40px; height: 40px;" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>
                        <h3 class="text-wood-dark fw-bold">Belum ada artikel</h3>
                        <p class="text-secondary">Silakan kembali lagi nanti untuk update terbaru.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-wood-dark text-white py-5 border-top border-white border-opacity-10">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <div class="rounded-circle d-flex align-items-center justify-content-center"
                            style="width: 40px; height: 40px; background: linear-gradient(to bottom right, #D4A574, #3E2723);">
                            <span class="text-white fw-bold fs-5">K</span>
                        </div>
                        <h4 class="fs-4 fw-bold text-white m-0">Kayu<span class="text-wood-gold">Jaya</span></h4>
                    </div>
                    <p class="text-white-50">Supplier kayu terpercaya dengan kualitas terbaik untuk kebutuhan
                        konstruksi dan furnitur Anda.</p>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <h5 class="fw-bold mb-3">Menu</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="{{ url('/') }}" class="text-white-50 hover-text-gold">Beranda</a></li>
                        <li><a href="{{ url('/#tentang') }}" class="text-white-50 hover-text-gold">Tentang</a></li>
                        <li><a href="{{ url('/#produk') }}" class="text-white-50 hover-text-gold">Produk</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h5 class="fw-bold mb-3">Layanan</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#" class="text-white-50 hover-text-gold">Konsultasi</a></li>
                        <li><a href="#" class="text-white-50 hover-text-gold">Pengiriman</a></li>
                        <li><a href="#" class="text-white-50 hover-text-gold">Custom Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="fw-bold mb-3">Kontak</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li class="text-white-50">Jl. Industri Kayu No. 123, Jepara</li>
                        <li class="text-white-50">+62 812 3456 7890</li>
                        <li class="text-white-50">info@kayujaya.com</li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-white border-opacity-10 pt-4 text-center">
                <small class="text-white-50">&copy; {{ date('Y') }} Kayu Jaya. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
