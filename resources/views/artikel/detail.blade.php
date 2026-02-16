<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $artikel->title ?? 'Artikel Tidak Ditemukan' }} - Portal Berita</title>

    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700,800" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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

        .nav-solid {
            background: rgba(62, 39, 35, 0.95);
            backdrop-filter: blur(10px);
        }

        .btn-wood {
            background: linear-gradient(135deg, #5D4037 0%, #3E2723 100%);
            color: white;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-wood:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(62, 39, 35, 0.3);
            color: white;
        }

        .featured-image {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 1rem;
            margin-bottom: 30px;
        }

        .article-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #4a4a4a;
        }

        .article-content p {
            margin-bottom: 1.5rem;
        }

        .content-wrapper {
            background: white;
            border-radius: 1.5rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
            padding: 3rem;
            margin-top: -100px;
            position: relative;
            z-index: 20;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                padding: 1.5rem;
                margin-top: -50px;
            }
        }
    </style>
</head>

<body class="bg-wood-cream">

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

            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-light rounded-pill px-4 btn-sm"
                            href="{{ route('artikel.show.all') }}">
                            &larr; Kembali ke Daftar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if ($artikel)
        <!-- Article Header Background -->
        <div class="position-relative bg-wood-dark d-flex align-items-center justify-content-center"
            style="height: 50vh; min-height: 400px; margin-top: 76px;">
            <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25">
                @if ($artikel->featured_image)
                    <img src="{{ asset('img/' . $artikel->featured_image) }}" class="w-100 h-100 object-fit-cover"
                        style="filter: blur(5px);">
                @else
                    <div class="w-100 h-100 bg-wood-dark"></div>
                @endif
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: linear-gradient(to bottom, rgba(62,39,35,0.8), rgba(62,39,35,0.95));"></div>

            <div class="container position-relative z-10 text-center text-white pb-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <span class="badge bg-wood-gold text-wood-dark fw-bold px-3 py-2 mb-3 rounded-pill">Artikel &
                            Berita</span>
                        <h1 class="display-5 fw-bold mb-3">{{ $artikel->title }}</h1>
                        <div class="d-flex align-items-center justify-content-center gap-3 text-white-50 small">
                            <div class="d-flex align-items-center gap-1">
                                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Admin
                            </div>
                            <span>&bull;</span>
                            <div class="d-flex align-items-center gap-1">
                                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                {{ $artikel->created_at->format('d F Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article Content -->
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="content-wrapper">
                        @if ($artikel->featured_image)
                            <img src="{{ asset('img/' . $artikel->featured_image) }}" class="featured-image shadow"
                                alt="{{ $artikel->title }}">
                        @endif

                        <article class="article-content">
                            {!! nl2br(e($artikel->content)) !!}
                        </article>

                        <hr class="my-5 border-secondary opacity-25">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('artikel.show.all') }}"
                                class="btn btn-wood rounded-pill px-4 py-2 fw-semibold">
                                &larr; Artikel Lainnya
                            </a>

                            <!-- Share Buttons (Visual Only) -->
                            <div class="d-flex gap-2">
                                <button class="btn btn-light rounded-circle border" style="width: 40px; height: 40px;">
                                    <i class="fab fa-facebook-f text-secondary"></i>
                                </button>
                                <button class="btn btn-light rounded-circle border" style="width: 40px; height: 40px;">
                                    <i class="fab fa-twitter text-secondary"></i>
                                </button>
                                <button class="btn btn-light rounded-circle border" style="width: 40px; height: 40px;">
                                    <i class="fab fa-whatsapp text-secondary"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container py-5 text-center" style="margin-top: 100px;">
            <div class="alert alert-warning rounded-4 shadow-sm border-0">Artikel tidak ditemukan.</div>
            <a href="{{ route('artikel.show.all') }}" class="btn btn-wood rounded-pill px-4">Kembali</a>
        </div>
    @endif

    <!-- Footer -->
    <footer class="bg-wood-dark text-white py-5 border-top border-white border-opacity-10 mt-auto">
        <div class="container text-center">
            <div class="d-flex align-items-center justify-content-center gap-2 mb-4">
                <div class="rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px; background: linear-gradient(to bottom right, #D4A574, #3E2723);">
                    <span class="text-white fw-bold fs-5">K</span>
                </div>
                <h4 class="fs-4 fw-bold text-white m-0">Kayu<span class="text-wood-gold">Jaya</span></h4>
            </div>
            <p class="text-white-50 mb-4">Terima kasih telah membaca artikel kami.</p>
            <small class="text-white-50">&copy; {{ date('Y') }} Kayu Jaya. All rights reserved.</small>
        </div>
    </footer>

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
