@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tulis Artikel Baru</h1>
            <a href="{{ route('artikel.index') }}" class="btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
            </a>
        </div>

        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Kolom Kiri: Konten Utama -->
                <div class="col-lg-8">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Konten Artikel</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title" class="font-weight-bold text-dark">Judul Artikel</label>
                                <input type="text" name="title" id="title"
                                    class="form-control form-control-lg @error('title') is-invalid @enderror"
                                    placeholder="Masukkan judul yang menarik..." value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="content" class="font-weight-bold text-dark">Isi Konten</label>
                                <textarea name="content" id="content" rows="15" class="form-control @error('content') is-invalid @enderror"
                                    required>{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="excerpt" class="font-weight-bold text-dark">Ringkasan (Excerpt)</label>
                                <textarea name="excerpt" id="excerpt" rows="3" class="form-control @error('excerpt') is-invalid @enderror"
                                    placeholder="Ringkasan singkat untuk tampilan daftar...">{{ old('excerpt') }}</textarea>
                                @error('excerpt')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Akan ditampilkan di halaman depan atau daftar
                                    artikel.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Status & Publish -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Publikasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="status" class="font-weight-bold text-dark">Status</label>
                                <select name="status" id="status"
                                    class="form-control @error('status') is-invalid @enderror">
                                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Simpan sebagai
                                        Draft</option>
                                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Terbitkan
                                        Sekarang</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold text-dark">Gambar Utama</label>
                                <div class="custom-file">
                                    <input type="file"
                                        class="custom-file-input @error('featured_image') is-invalid @enderror"
                                        id="featured_image" name="featured_image" onchange="previewImage(this)">
                                    <label class="custom-file-label" for="featured_image">Pilih file...</label>
                                    @error('featured_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-3 text-center">
                                    <img id="img-preview" src="#" alt="Preview"
                                        class="img-fluid rounded d-none shadow-sm"
                                        style="max-height: 200px; width: 100%; object-fit: cover;">
                                </div>
                            </div>

                            <hr>
                            <button type="submit" class="btn btn-primary btn-block font-weight-bold py-2">
                                <i class="fas fa-save fa-sm mr-1"></i> Simpan Artikel
                            </button>
                        </div>
                    </div>

                    <!-- SEO Settings -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">SEO (Google)</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="meta_title" class="small font-weight-bold text-dark">Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title"
                                    class="form-control form-control-sm @error('meta_title') is-invalid @enderror"
                                    placeholder="Judul di pencarian Google" value="{{ old('meta_title') }}">
                                @error('meta_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="meta_description" class="small font-weight-bold text-dark">Meta
                                    Description</label>
                                <textarea name="meta_description" id="meta_description" rows="4"
                                    class="form-control form-control-sm @error('meta_description') is-invalid @enderror"
                                    placeholder="Deskripsi di pencarian Google">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted">Maksimal 160 karakter.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Script sederhana untuk preview gambar sebelum upload
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var preview = document.getElementById('img-preview');
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                }
                reader.readAsDataURL(input.files[0]);

                // Update label file input
                var fileName = input.files[0].name;
                var label = input.nextElementSibling;
                label.innerText = fileName;
            }
        }
    </script>
@endsection
