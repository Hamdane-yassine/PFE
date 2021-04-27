<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Matiere::class, function (Faker $faker) {
    return [
        'idProf' => factory(App\Professeur::class),
        'idModule' => factory(App\Module::class),
    ];
});
