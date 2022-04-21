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
        Schema::create('cremes', function (Blueprint $table) {
            $table->id('cre_id');
            $table->text('title');
            $table->text('description');
            $table->foreignId('cit_id')->nullable()->index();
            $table->foreignId('id')->nullable()->index();
            $table->string('file');
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
        Schema::dropIfExists('cremes');
    }
};
