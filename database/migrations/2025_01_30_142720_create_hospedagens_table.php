<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('hospedagens', function (Blueprint $table) {
            $table->id();
            $table->string('hospedeiro');
            $table->date('vencimento');

            /*FK DOMINIO VINCULADO */
            $table->unsignedBigInteger('dominio_id');
            $table->foreign('dominio_id')->references('id')->on('dominios');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hospedagens');
    }
};
