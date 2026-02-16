@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Artikel</h1>
            <a href="{{ route('artikel.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Buat Artikel Baru
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Semua Artikel</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 45%">Judul & Ringkasan</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th class="text-center" style="width: 15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($artikel as $article)
                                <tr>
                                    <td class="align-middle">
                                        <div class="font-weight-bold text-primary mb-1">{{ $article->title }}</div>
                                        <small class="text-muted d-block">{{ Str::limit($article->excerpt, 80) }}</small>
                                    </td>
                                    <td class="align-middle">
                                        @if ($article->status == 'published')
                                            <span class="badge badge-success px-2 py-1">Published</span>
                                        @else
                                            <span class="badge badge-warning px-2 py-1">Draft</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        {{ $article->created_at->format('d M Y') }}<br>
                                        <small class="text-muted">{{ $article->created_at->format('H:i') }} WIB</small>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="#" class="btn btn-sm btn-info btn-circle" title="Edit">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger btn-circle" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted">Belum ada artikel yang dibuat.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    {{ $artikel->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
