<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{



    public function up()
    {
        Schema::create('postlar', function (Blueprint $table) {
            $table->id();
            $table->text('title-2');
            $table->text('text');
            $table->text('content');
            $table->string('photo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('postlar');
    }
};
