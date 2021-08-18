<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('fname');
            $table->string('ppancard');
            $table->string('cpancard');
            $table->string('gstin');
            $table->string('firmname');
            $table->string('adhar');
            $table->string('btype');
            $table->string('pincode');
            $table->string('faddress');
            $table->string('bankacc');
            $table->string('bankifsc');
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
        Schema::dropIfExists('registration');
    }
}
