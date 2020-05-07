<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_clients', function (Blueprint $table) {
            $table->id()->comment('Id del registro');
            $table->foreignId('user_provider_id')->comment('Id del Usuario que es Proveedor');
            $table->foreignId('user_client_id')->comment('Id del Usuario que es Cliente');
            $table->timestamps();

            $table->unique(['user_provider_id', 'user_client_id']);

            $table->foreign('user_provider_id')->references('id')->on('users');
            $table->foreign('user_client_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_clients');
    }
}
