<?php

use Illuminate\Database\Seeder;
use App\Models\Theme;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Theme::class)->create([
            'name' => 'Deportes'
        ]);

        factory(Theme::class)->create([
            'name' => 'Salud'
        ]);

        factory(Theme::class)->create([
            'name' => 'Tecnología'
        ]);
    }
}
