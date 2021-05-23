<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->integer('bedrooms');
            $table->float('bathrooms');
            $table->float('total_area');
            $table->boolean('purchased');
            $table->integer('value');
            $table->integer('discount');
            $table->bigInteger('owner_id')->unsigned();
            $table->boolean('expired');
            $table->timestamps();
            $table->foreign('owner_id')
                ->references('id')
                ->on('users')
                ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}

/*{
    'id': 1,
    'address': 'Rua Vergueiro, 126',
    'bedrooms': 3,
    'bathrooms': 2,
    'total_area': 125,
    'purchased': false,
    'value': 125000.00,
    'discount': 10
    'owner_id': 1,
    'expired': false,
    'created_at': '2021-02-23 16:02:16',
    'updated_at': '2021-02-23 16:02:16'
}*/


