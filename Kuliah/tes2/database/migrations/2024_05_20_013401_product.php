<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('nama_tabel', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->float('price')->nullable();
        $table->enum('category', ['makanan', 'barang']);
        $table->timestamps(); // Jika Anda ingin menggunakan timestamps (created_at dan updated_at)
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
