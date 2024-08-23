<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsProductTable extends Migration
{
    public function up()
    {
        Schema::create('ms_product', function (Blueprint $table) {
            $table->id();
            $table->string('NamaProduk');
            $table->integer('Qty');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ms_product');
    }
}
