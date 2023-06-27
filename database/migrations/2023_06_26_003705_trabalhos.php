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
        Schema::create('trabalhos',function(Blueprint $table){
            $table-> bigIncrements('id');
            $table-> String('titulo');
            $table-> String('descricao');
            $table-> date('datapublicacao'); 
            $table-> date('dataentrega');
            $table-> String('requisitos');
            $table-> String('pagamento');
            $table-> String('statusT');
            $table-> String('autor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabalhos');
    }
};
