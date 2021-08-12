<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDkytiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dkytiems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userid');
            $table->string('noitiem');
            $table->string('doituonguutien');
            $table->date('ngayhen');
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
        Schema::dropIfExists('dkytiems');
    }
}
