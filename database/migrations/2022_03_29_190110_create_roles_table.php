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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });

        DB::table("roles")->insert(
            array(
                array("name" => "Admin", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Event Organizer", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Customer", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
