<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('percentage');
            $table->timestamps();
        });

        DB::table('discount_rules')->insert([
            'percentage' => 5,
        ]);

        DB::table('discount_rules')->insert([
            'percentage' => 10,
        ]);

        DB::table('discount_rules')->insert([
            'percentage' => 12,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discount_rules');
    }
}
