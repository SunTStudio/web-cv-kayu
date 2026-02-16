<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Menampilkan daftar semua artikel.
     */
    public function index()
    {
        // Mengambil artikel terbaru dengan paginasi 10 item per halaman
        $artikel = Article::latest()->paginate(10);
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Menampilkan form untuk membuat artikel baru.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Menyimpan artikel baru ke database.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'excerpt' => 'nullable',
            'featured_image' => 'nullable', // Max 2MB
            'meta_title' => 'nullable', // Ideal untuk SEO Google
            'meta_description' => 'nullable', // Ideal untuk SEO Google
            'status' => 'required|in:draft,published',
        ]);

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|max:255',
        //     'content' => 'required',
        //     'excerpt' => 'nullable|max:300',
        //     'featured_image' => 'nullable', // Max 2MB
        //     'meta_title' => 'nullable|max:60', // Ideal untuk SEO Google
        //     'meta_description' => 'nullable|max:160', // Ideal untuk SEO Google
        //     'status' => 'required|in:draft,published',
        // ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        try {
            DB::transaction(function () use ($request, $validated) {
                // Upload Gambar jika ada
                if ($request->hasFile('featured_image')) {
                    $file = $request->file('featured_image');
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('img/artikel'), $filename);
                    $validated['featured_image'] = 'artikel/' . $filename;
                }

                // Set tanggal publish otomatis jika status published
                if ($validated['status'] === 'published') {
                    $validated['published_at'] = now();
                }

                Article::create($validated);
            });

            return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dibuat!');
        } catch (\Exception $e) {
            Log::error('Gagal menyimpan artikel: ' . $e->getMessage());
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan artikel: ' . $e->getMessage());
        }
    }

    public function showAll(){
        $artikel = Article::all();
        return view('artikel.all', compact('artikel'));
    
    }

    public function detail($id){
        $artikel = Article::find($id);
        return view('artikel.detail', compact('artikel'));
    }
}