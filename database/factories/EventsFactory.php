<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\Events::class, function (Faker $faker) {
    return [
        'title'   => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'content' => $faker->paragraph,
		'date'    => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
