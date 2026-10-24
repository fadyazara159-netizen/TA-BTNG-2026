<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skincares', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('brand');
            $table->string('kategori');
            $table->integer('harga');
            $table->integer('ukuran_ml');
            $table->string('tipe_kulit');
            $table->enum('status', ['ready', 'out_of_stock'])->default('ready');
            $table->text('foto');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skincares');
    }
};
