<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) { //생성할 테이블 이름
            $table->text('name');
            $table->string('id')->uniqid();
            $table->string('password')->bcrypt;
            $table->string('email')->uniqid();
            $table->text('description');
            // timestamps는 폼 전송시 자동으로 입력되니, 폼에서는 적지 않는다.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
