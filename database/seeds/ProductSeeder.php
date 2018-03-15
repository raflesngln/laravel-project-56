<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Product; // ini include modelnya
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $faker= Factory::create();
            for($i=0; $i<20; $i++){
                $product=new Product;
                $product->nama=$faker->text($maxNbChars=50);
                $product->satuan=$faker->randomElement($array=array('kg','pcs','unit'));
                $product->stok=$faker->randomDigit;
                $product->harga=$faker->numberBetween($min=1000,$max=1500000);
                $product->description=$faker->text($maxNbChars=150);
                $product->save(); // this is elequent;
            }
    }
}
