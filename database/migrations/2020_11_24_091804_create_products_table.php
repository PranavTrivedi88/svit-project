<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('discount_rule_id');
            $table->string('name');
            $table->string('image');
            $table->text('decription');
            $table->decimal('price_per_unit', 8, 2);
            $table->timestamps();
        });

        DB::table('products')->insert([
            'discount_rule_id' => 1,
            'name' => 'Shoes',
            'image' => 'shoes.jpeg',
            'decription' => 'Creta-12 sports shoes for men | Latest Stylish Casual sport shoes for men | running shoes for boys | Lace up Lightweight black shoes for running, walking, gym, trekking, hiking & party Running Shoes For Men  (Blue, Orange)',
            'price_per_unit' => 2000,
        ]);

        DB::table('products')->insert([
            'discount_rule_id' => 2,
            'name' => 'Mobile',
            'image' => 'mobile.jpeg',
            'decription' => 'Take advantage of this realme smartphone’s 64 MP quad camera and click stunning photos. This phone also comes with a bunch of cool filters that’ll make night photography all the more amazing. In addition, this smartphone’s Helio G95 Gaming Processor makes it one powerful performer.',
            'price_per_unit' => 17000,
        ]);

        DB::table('products')->insert([
            'discount_rule_id' => 3,
            'name' => 'Perfume',
            'image' => 'perfume.jpeg',
            'decription' => 'MINISO Blooming Eau De Toilette Long Lasting Women Perfumes (Blissful Bouquet) Perfume - 30 ml  (For Women)',
            'price_per_unit' => 800,
        ]);

        DB::table('products')->insert([
            'discount_rule_id' => 2,
            'name' => 'Refrigerator',
            'image' => 'refrigerator.jpeg',
            'decription' => 'Drinks, fresh fruits, or leftover meals - your kitchen will always have something delicious to relish with this LG 190 L refrigerator in your home. This essential kitchen appliance features LG’s Smart Inverter Compressor, Smart Connect Technology, and an Anti-bacterial Gasket for effective cooling and long-lasting consistent performance.',
            'price_per_unit' => 25000,
        ]);

        DB::table('products')->insert([
            'discount_rule_id' => 3,
            'name' => 'Television',
            'image' => 'tv.jpeg',
            'decription' => 'Bring home this TV from realme and experience the stunning visuals that result from its Chroma Boost Picture Engine. Boasting a Bezel-less design and Dolby Surround Audio, this Android TV blends right into your decor and offers you audio performance that makes your favourite TV shows, movies, and other video content all the more enjoyable.',
            'price_per_unit' => 35000,
        ]);

        DB::table('products')->insert([
            'discount_rule_id' => 1,
            'name' => 'Watch',
            'image' => 'watch.jpeg',
            'decription' => 'No doubt this watch is superb. Built quality and look beautiful. Dial pretty good and attractive, perfect dial size and strap . There are many companies having similar watches, but I think Fogg is best',
            'price_per_unit' => 1300,
        ]);

        DB::table('products')->insert([
            'discount_rule_id' => 2,
            'name' => 'Laptop',
            'image' => 'laptop.jpeg',
            'decription' => 'With this ASUS Gaming Laptop, you can enjoy using it for hours, thanks to its stunning design and innovative features. It has super-narrow bezels that frame the display’s edges so that you can get an expansive view of games, movies, and more. With the NVIDIA GeForce GTX 1650 Ti GPU, you can be on top of your game as it ensures fast-paced and smooth gaming sessions. You can game for long hours while your fingers remain cool, thanks to the well-ventilated WASD keys that ensure proper airflow from the fan located below.',
            'price_per_unit' => 80000,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
