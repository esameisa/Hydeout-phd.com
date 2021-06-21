<?php

use Illuminate\Database\Seeder;
use App\Entities\Template;
use Faker\Generator as Faker;

class TemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $pageNames = [
            'Home',
            'about',
            'about-map',
        ];
        for ($i=1; $i < 3; $i++) { 
        	Template::create([
        	'name' => $pageNames[$i],
        	'type' => config('template.page'),
        	'title1' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        	'title2' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        	'content1' => $faker->realText(rand(50, 100)),
        	'content2' => $faker->realText(rand(50, 100)),
        	// 'image1' => $faker->imageUrl,
        	// 'image2' => $faker->imageUrl,
        	'url1' => $faker->url,
        	'url2' => $faker->url
        ]);
        }
    }
}