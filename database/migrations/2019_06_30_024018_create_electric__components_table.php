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
        Schema::create('electric__components', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sub_cat_id');// sub catagory id
            $table->string('part_number');
            $table->string('description');
            $table->string('series');
            $table->string('manufacturer_part_number');
            $table->string('manufacturer');
            $table->integer('quantity_available');
            $table->double('unit_price');// price in LKR
            $table->integer('minimum_quantity');
            $table->string('part_status');
            $table->string('accessory_type');
            $table->string('related_product');
            $table->string('datasheet_path');
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
        Schema::dropIfExists('electric__components');
    }
}
