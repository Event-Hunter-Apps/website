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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });

        DB::table("cities")->insert(
            array(
                array("name" => "Bandung", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Jakarta", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Yogyakarta", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Ambon", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Balikpapan", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Bekasi", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Binjai", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Bogor", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Cimahi", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
                array("name" => "Sidoarjo", "created_at" => new Datetime("now"), "updated_at" => new Datetime("now")),
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
        Schema::dropIfExists('cities');
    }
};
