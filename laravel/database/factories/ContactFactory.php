<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email'=>$faker->email,
        'subject' => $faker->sentence(5),
        'message'=>$faker->paragraph(5),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
