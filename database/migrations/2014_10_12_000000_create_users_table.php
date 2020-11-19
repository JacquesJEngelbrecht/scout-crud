<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->mediumInteger('id', 8)->nullable(false)->autoIncrement();
            $table->string('username', 30)->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->string('password', 60)->nullable();
            $table->string('mobile', 255)->nullable();
            $table->string('name', 30)->nullable();
            $table->string('surname', 30)->nullable();
            $table->string('job_title', 255)->nullable();
            $table->text('bio')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
