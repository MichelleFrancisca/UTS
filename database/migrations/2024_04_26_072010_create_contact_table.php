<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->string('Code', 10)->unique()->required();
            $table->string('Name', 100)->required();
            $table->string('Email', 100)->unique()->required();
            $table->string('Phone', 20)->required();
            $table->string('Mobile', 20)->required();
            $table->text('Street');
            $table->text('City');
            $table->text('State');
            $table->text('Zip');
            $table->text('Country');
            $table->text('VAT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
