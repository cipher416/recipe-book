<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            'language_id' => '2',
            'title' => 'Hottang',
            'author' => 'Koki Hottang',
            'price' => '15000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/hottang.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '2',
            'title' => 'Singkong Keju',
            'author' => 'Koki Singkong',
            'price' => '10000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/singkong_keju.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '2',
            'title' => 'Burger Indomie',
            'author' => 'Koki Burger',
            'price' => '15000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/burger_indomie.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '2',
            'title' => 'Pisang Nugget',
            'author' => 'Koki Pisang',
            'price' => '15000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/pisang_nugget.png'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '2',
            'title' => 'Es Krim Goreng',
            'author' => 'Koki Es Krim',
            'price' => '15000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/es_krim_goreng.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '2',
            'title' => 'Pizza Mini',
            'author' => 'Koki Pizza',
            'price' => '20000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/mini_pizza.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '2',
            'title' => 'Oreo Goreng',
            'author' => 'Koki Oreo',
            'price' => '10000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/oreo_goreng.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '2',
            'title' => 'Steak Tempe',
            'author' => 'Koki Steak',
            'price' => '20000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/steak_tempe.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '1',
            'title' => 'Bowties & Broccoli',
            'author' => 'Bowties Chef',
            'price' => '25000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/bowties_broccoli.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '1',
            'title' => 'Butter Chicken',
            'author' => 'Chicken Chef',
            'price' => '25000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/butter_chicken.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '1',
            'title' => 'Pan Sausage & Veggies',
            'author' => 'Veggies Chef',
            'price' => '20000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/sausage_veggies.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '1',
            'title' => 'Lemon Garlic Salmon & Asparagus',
            'author' => 'Salmon Chef',
            'price' => '25000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/salmon_asparagus.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '1',
            'title' => 'Chicken & Biscuit Bake',
            'author' => 'Chicken Chef',
            'price' => '20000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/chicken_biscuits.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '1',
            'title' => 'Lemon Garlic Shrimp Pasta',
            'author' => 'Shrimp Chef',
            'price' => '25000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/shrimp_pasta.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '1',
            'title' => 'Chicken & Veggie Stir-Fry',
            'author' => 'Veggies Chef',
            'price' => '30000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/chicken_veggie.jpg'
        ]);

        DB::table('recipes')->insert([
            'language_id' => '1',
            'title' => 'Chicken Alfredo Penne',
            'author' => 'Chicken Chef',
            'price' => '30000',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => 'recipe/chicken_penne_alfredo.jpg'
        ]);
    }
}
