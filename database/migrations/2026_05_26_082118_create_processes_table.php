<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('process_code', 20)->unique();
            $table->string('process_name', 100); // Besik, Bombing, Rusak, dll

            // Pengelompokan jenis proses
            $table->enum('category', ['Normal', 'Reparasi', 'Scrap', 'Lainnya'])->default('Normal');

            // INILAH KUNCI KONDISINYA
            $table->boolean('is_final')->default(false)->comment('1 = Stop/Selesai, 0 = Lanjut Proses Berikutnya');
            $table->boolean('is_rework')->default(false)->comment('1 = Reparasi/Mengulang, 0 = Tidak');

            $table->text('information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes');
    }
}
