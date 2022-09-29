<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('server_authentications', function (Blueprint $table) {
            $table->id();
            $table->int('protocol_id');
            $table->string('server_username');
            $table->string('server_password');
            $table->int('server_port')->nullable();
            $table->enum('authentication_method',['normal_password','identity_key'])->default('normal_password');
            $table->string('pk_path')->nullable();
            $table->string('password_to_unlock_key')->nullable();
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
        Schema::dropIfExists('server_authentications');
    }
};
