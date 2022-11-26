<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('publishers')->insert([
            [
                'name' => 'Indo Publisher',
                'address' => 'Jl. Kembangan 8 No 23a',
                'phone' => '083243245689',
                'email' => 'IndoPub@gmail.com',
                'image' => 'Screenshot 2022-11-22 080259.jpg'
            ],
            [
                'name' => 'Kurfust Books',
                'address' => 'St. Hartmann XVI AB',
                'phone' => '047934535444',
                'email' => 'Kurfb@gmail.com',
                'image' => 'Screenshot 2022-11-22 080404.jpg'
            ],
            [
                'name' => 'Mandalor Publications',
                'address' => 'St. Mustang 78s Block 12',
                'phone' => '01324343243',
                'email' => 'madalor@gmail.com',
                'image' => 'Screenshot 2022-11-22 080522.jpg'
            ],
        ]);
    }
}
