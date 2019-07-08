<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectricComponentsTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electric_components', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sub_catagory_id');
            $table->string('part_number');
            $table->string('description');
            $table->string('series');
            $table->string('manufacturer_part_number');
            $table->string('manufacturer');
            $table->integer('quantity_available');
            $table->string('unit_price');
            $table->integer('minimum_quantity');
            $table->string('part_status');
            $table->string('accessory_Type');
            $table->string('for_use_with_related_products');
            $table->string('data_sheet_path');
            $table->string('image_path');
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
        Schema::dropIfExists('electric_components');
    }
}
