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
        Schema::create('komputers', function (Blueprint $table) {
            $table->id();
            $table->string("merk");
            $table->integer("price");
            $table->string("penyimpanan");
            $table->string("memori");
            $table->string("warna");
            $table->string("deskripsi")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komputers');
    }
};
