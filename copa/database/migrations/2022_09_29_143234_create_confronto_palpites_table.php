<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('confronto_palpites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('confronto_id')->constrained();
            $table->foreignId('casa')->references('id')->on('selecaos')->constrained();
            $table->foreignId('visitante')->references('id')->on('selecaos')->constrained();
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
        // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('confronto_palpites');
        // DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
