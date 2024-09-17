<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('blogs', function (Blueprint $table) {
        $table->id();
        $table->string('image')->nullable();
        $table->string('titre');
        $table->text('detail');
        $table->date('date')->nullable();
        $table->time('heure')->nullable();
        $table->string('type');
        $table->enum('statut', ['active', 'inactive']);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('blogs');
}

};
