<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable();
            $table->string('type')
                ->nullable();
            $table->string('title')
                ->nullable();
            $table->string('link')
                ->nullable();
            $table->string('company');
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
        Schema::dropIfExists('professional_experiences');
    }
}
