<?php

use App\General;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        General::create([
            'logo' => 'https://source.unsplash.com/QAB-WJcbgJk/60x60',
            'title' => 'Site Title',
            'tagline' => 'Site Tagline',
            'tagline' => 'Site Tagline',
        ]);
    }
}
