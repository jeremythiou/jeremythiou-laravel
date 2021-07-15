<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable();
            $table->string('name');
            $table->string('link')
                ->nullable();
            $table->string('location');
            $table->date('from');
            $table->date('to')
                ->nullable();
            $table->text('description')
                ->nullable();
            $table->string('locality')
                ->nullable();
            $table->string('country')
                ->nullable();
            $table->boolean('display')
                ->default(true);
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
        Schema::dropIfExists('formations');
    }
}
