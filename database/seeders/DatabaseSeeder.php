<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('menus')->insert([
            'image' => 'lemper.jpeg',
            'name' => 'Lemper',
            'slug' => 'lemper',
            'excerpt' => 'Ketan dengan isian ayam',
            'old_price' => '3000',
            'price' => '2000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'risol.jpg',
            'name' => 'Risol',
            'slug' => 'risol',
            'excerpt' => 'Risol isian sayur atau ayam',
            'old_price' => '2000',
            'price' => '1000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'roti.jpeg',
            'name' => 'Roti',
            'slug' => 'roti',
            'excerpt' => 'Isian coklat atau daging',
            'old_price' => '2000',
            'price' => '1000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'lays.jpeg',
            'name' => 'Lays Rumput Laut',
            'slug' => 'lays-rumput-laut',
            'excerpt' => 'Snack rasa rumput laut',
            'old_price' => '10000',
            'price' => '7000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'bakso.jpeg',
            'name' => 'Bakso',
            'slug' => 'bakso',
            'excerpt' => 'Semangkuk Bakso Hangat',
            'old_price' => '11000',
            'price' => '10000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'soto.jpg',
            'name' => 'Soto',
            'slug' => 'soto',
            'excerpt' => 'Semangkuk Soto Hangat',
            'old_price' => '11000',
            'price' => '10000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'nasi_goreng.jpg',
            'name' => 'Nasi Goreng',
            'slug' => 'nasi-goreng',
            'excerpt' => 'Dengan suiran ayam',
            'old_price' => '6000',
            'price' => '5000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'nasi_kuning.jpeg',
            'name' => 'Nasi Kuning',
            'slug' => 'nasi-kuning',
            'excerpt' => 'Dengan suiran telur',
            'old_price' => '6000',
            'price' => '5000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'indomie_goreng.jpg',
            'name' => 'Indomie Goreng',
            'slug' => 'indomie-goreng',
            'excerpt' => 'Indomie Goreng enak',
            'old_price' => '6000',
            'price' => '5000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'indomie_rebus.jpg',
            'name' => 'Indomie Rebus',
            'slug' => 'indomie-rebus',
            'excerpt' => 'Indomie Rebus enak',
            'old_price' => '6000',
            'price' => '5000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'tahu_isi.jpg',
            'name' => 'Tahu Isi',
            'slug' => 'tahu-isi',
            'excerpt' => 'Tahu dengan isian bakso',
            'old_price' => '3000',
            'price' => '2000',
            'category' => 'food'
        ]);

        DB::table('menus')->insert([
            'image' => 'aqua.jpg',
            'name' => 'Aqua 600ml',
            'slug' => 'aqua-600ml',
            'excerpt' => 'Air mineral',
            'old_price' => '5000',
            'price' => '4000',
            'category' => 'drink'
        ]);

        DB::table('menus')->insert([
            'image' => 'kopi.jpg',
            'name' => 'Kopi',
            'slug' => 'kopi',
            'excerpt' => 'Kopi hitam',
            'old_price' => '3000',
            'price' => '2000',
            'category' => 'drink'
        ]);

        DB::table('menus')->insert([
            'image' => 'uc1000.jpeg',
            'name' => 'Orange Water',
            'slug' => 'orange-water',
            'excerpt' => 'Minuman vitamin c',
            'old_price' => '7000',
            'price' => '5000',
            'category' => 'drink'
        ]);

        DB::table('menus')->insert([
            'image' => 'esteh.jpg',
            'name' => 'Es Teh',
            'slug' => 'es-teh',
            'excerpt' => 'Minuman teh dingin',
            'old_price' => '3000',
            'price' => '2000',
            'category' => 'drink'
        ]);

        DB::table('menus')->insert([
            'image' => 'sprite.jpeg',
            'name' => 'Sprite',
            'slug' => 'sprite',
            'excerpt' => 'Minuman rasa lemon',
            'old_price' => '5000',
            'price' => '4000',
            'category' => 'drink'
        ]);

        DB::table('menus')->insert([
            'image' => 'fanta.jpg',
            'name' => 'Fanta',
            'slug' => 'fanta',
            'excerpt' => 'Minuman berkarbonasi',
            'old_price' => '5000',
            'price' => '4000',
            'category' => 'drink'
        ]);

        DB::table('menus')->insert([
            'image' => 'susu.jpg',
            'name' => 'Susu',
            'slug' => 'susu',
            'excerpt' => 'Susu vanila',
            'old_price' => '7000',
            'price' => '5000',
            'category' => 'drink'
        ]);

        DB::table('menus')->insert([
            'image' => 'frestea.jpg',
            'name' => 'Frestea',
            'slug' => 'frestea',
            'excerpt' => 'Minuman penyegar',
            'old_price' => '7000',
            'price' => '5000',
            'category' => 'drink'
        ]);
    }
}
