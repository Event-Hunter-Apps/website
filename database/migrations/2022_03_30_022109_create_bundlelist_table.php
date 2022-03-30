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
        Schema::create('bundlelist', function (Blueprint $table) {
            $table->unsignedBigInteger('tiket_id');
            $table->unsignedBigInteger('bundle_id');
            $table->primary(['tiket_id', 'bundle_id']);
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
        Schema::dropIfExists('bundlelist');
    }
};
