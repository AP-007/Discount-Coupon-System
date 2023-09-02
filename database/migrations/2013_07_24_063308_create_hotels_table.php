<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('description');
            $table->string('municipality');
            $table->string('pan');
            $table->integer('ward_no');
            $table->string('tole');
            $table->foreignId('district_id')->nullOnDelete()->constrained();
            $table->foreignId('province_id')->nullOnDelete()->constrained();
            // $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('hotels');
    }
}
