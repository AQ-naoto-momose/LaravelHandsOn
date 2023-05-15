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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('車名');
            $table->foreignId('company_id')->nullable()->comment('会社名');
            $table->integer('cc')->nullable()->comment('排気量');
            $table->date('sale_date')->nullable()->comment('発売日');
            $table->text('memo')->nullable()->comment('メモ');
            $table->text('image_url')->nullable()->comment('画像URL');
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
        Schema::dropIfExists('cars');
    }
};
