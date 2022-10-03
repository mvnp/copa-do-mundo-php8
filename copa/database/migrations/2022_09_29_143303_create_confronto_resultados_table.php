<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use SoftDeletes;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confronto_resultados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('confronto_id')->constrained();
            $table->foreignId('casa')->nullable()->references('id')->on('selecaos')->constrained();
            $table->foreignId('visitante')->nullable()->references('id')->on('selecaos')->constrained();
            $table->timestamps();
            $table->softDeletes();
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('confronto_resultados');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
