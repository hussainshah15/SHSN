<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          DB::table('products')->insert([
              
            
            [


            'name'=>'On-whey',
            'price'=>'4000',
            'category'=>'whey',
            'Discription'=>'Best type of whey ',
            'Gallery'=>'https://content.optimumnutrition.com/i/on/on-gold-standard-100-whey-protein_Image_01?layer0=$PDP_003$&fmt=auto&img404=no-product-image&v=1&locale=en-us,en-gb,*'

          ],
         [

            'name'=>'My Protein Impactwhey',
            'price'=>'4000',
            'category'=>'whey',
            'Discription'=>'Best type of whey ',
            'Gallery'=>'https://content.optimumnutrition.com/i/on/on-gold-standard-100-whey-protein_Image_01?layer0=$PDP_003$&fmt=auto&img404=no-product-image&v=1&locale=en-us,en-gb,*'

        ],
        [

            'name'=>'Blade Isolate Impactwhey',
            'price'=>'4000',
            'category'=>'whey',
            'Discription'=>'Best type of whey ',
            'Gallery'=>'https://content.optimumnutrition.com/i/on/on-gold-standard-100-whey-protein_Image_01?layer0=$PDP_003$&fmt=auto&img404=no-product-image&v=1&locale=en-us,en-gb,*'

        ]
          ]);
    }
}
