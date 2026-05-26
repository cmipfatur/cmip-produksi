<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 1. id (Primary Key, Auto Increment)
            $table->id();

            // 2. name (varchar 100, boleh kosong/NULL)
            $table->string('name', 100)->nullable();

            // 3. file_name (varchar 100, boleh kosong/NULL)
            $table->string('file_name', 100)->nullable();

            // 6. type (varchar 100, boleh kosong/NULL) - Saya taruh di sini agar urutannya rapi
            $table->string('type', 100)->nullable();

            // 7. keterangan (text, boleh kosong/NULL)
            $table->text('keterangan')->nullable();

            // 4 & 5. created_at & updated_at (Otomatis dibuat oleh Laravel)
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
