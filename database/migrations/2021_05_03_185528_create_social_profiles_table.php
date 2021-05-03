<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //nombre de la llave foranea
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //si elimina usuario de users se elimina en social_profiles tambien
            
            $table->string('social_id')->unique();
            $table->string('social_name');
            $table->string('social_avatar');

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
        Schema::dropIfExists('social_profiles');
    }
}
