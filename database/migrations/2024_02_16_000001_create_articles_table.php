<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            
            // SEO: URL yang bisa dibaca manusia dan Google (contoh: kayu-jati-berkualitas)
            $table->string('slug')->unique(); 
            
            // Konten Utama
            $table->text('excerpt')->nullable(); // Ringkasan untuk daftar artikel
            $table->longText('content'); // Isi artikel lengkap
            $table->string('featured_image')->nullable(); // Gambar utama (penting untuk Google Discover)
            
            // SEO Meta Tags (Jika kosong, nanti ambil dari title/excerpt)
            $table->string('meta_title')->nullable(); 
            $table->string('meta_description')->nullable();
            
            // Status Publikasi
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->timestamp('published_at')->nullable();
            
            $table->timestamps();
            
            // Indexing slug untuk performa pencarian database yang lebih cepat
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};