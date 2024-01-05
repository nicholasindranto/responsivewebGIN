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
        Schema::create('resis', function (Blueprint $table) {
            $table->id();
            $table->string('no_resi')->unique();
            $table->text('nama_pengirim');
            $table->longText('alamat_pengirim');
            $table->string('no_tlp_pengirim');
            $table->text('nama_penerima');
            $table->longText('alamat_penerima');
            $table->string('no_tlp_penerima');
            $table->float('berat');
            $table->smallInteger('jml');
            $table->decimal('biaya', 15, 2);
            $table->text('isi');
            $table->date('tanggal');
            $table->boolean('cod');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resis');
    }
};
