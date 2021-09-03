<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book',function(Blueprint $table){
            $table -> id();
            $table -> string('name',100);
            $table -> string('avatar',255);
            $table -> string('details',255);
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table -> unsignedBigInteger('id_author');
            $table -> unsignedBigInteger('id_type');
            $table -> unsignedBigInteger('id_nxb');
            $table -> foreign('id_author') -> references('id') -> on('author');
            $table -> foreign('id_type') -> references('id') -> on('book_type');
            $table -> foreign('id_nxb') -> references('id') ->on('nxb');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
