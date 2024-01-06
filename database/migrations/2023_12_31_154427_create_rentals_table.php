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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cust_id');
            $table->foreign('cust_id')-> references ('id')-> on ('customers');
            $table->unsignedBigInteger('spd_id');
            $table->foreign('spd_id')-> references ('id')-> on ('bicycles');
            $table->date('tgl_rent');
            $table->date('tgl_kembali');
            $table->integer('hari');
            $table->decimal('total_harga', 10, 2);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')-> references ('id')-> on ('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
