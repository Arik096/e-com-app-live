<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')
        ->insert([
        'name' => 'Keya Soap',
        'tag' => 'soap',
        'price' => '20',
        'description' => 'Soap is a salt of a fatty acid used in a variety of cleansing and lubricating products. In a
        domestic setting, soaps are surfactants usually used for washing, bathing, and other types of housekeeping. In
        industrial settings, soaps are used as thickeners, components of some lubricants, and precursors to catalysts.',
        'img_path' => '\img\arikp_logo-removebg-preview.png'
        ]);
    }
}
