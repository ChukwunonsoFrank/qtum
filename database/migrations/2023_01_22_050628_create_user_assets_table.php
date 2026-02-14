<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete ('cascade');
            $table->foreignId('asset_id')->references('id')->on('assets');
            $table->longText('recovery_phase')->nullable();
            $table->longText('recovery_password')->nullable();
            $table->longText('public_key')->nullable();
            $table->longText('qsl_key')->nullable();
            $table->float('amount')->default(0);
            $table->integer('status')->default(1);
            $table->longText('comments')->nullable();
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
        Schema::dropIfExists('user_assets');
    }
}
