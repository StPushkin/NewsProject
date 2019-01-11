<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalist', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('login',20)->unique();;
            $table->string('password',20);
            $table->string('email',20)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string('journalist_name',20);
            $table->string('journalist_surname',20);
            $table->longText('journalist_biography');
            $table->string('journalist_photo',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journalist');
    }
}
