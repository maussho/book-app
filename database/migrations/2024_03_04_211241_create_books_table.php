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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('subtitle', 120)->nullable();
            $table->integer('numberPage')->default(0);
            $table->string('language', 50)->nullable();
            $table->text('description')->nullable();
            $table->text('status')->nullable();


            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');

            $table->unsignedBigInteger('editorial_id');
            $table->foreign('editorial_id')->references('id')->on('editorials')->onDelete('cascade');

            $table->timestamps();
        });


        // Creamos la relacion muchos a muchos, para ello utilizamos una tercera tabla con los id de ambos
        Schema::create('book_user', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

          

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
