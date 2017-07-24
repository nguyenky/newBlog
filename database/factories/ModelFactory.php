<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => 'Lê Nguyên Ký',
        'email' => 'admin@gmail.com',
        'password' => $password ?: $password = bcrypt('123123'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->text(10),
        'category_id'=>rand(0,10),
        'description' => $faker->text(20),
        'impotant'=> rand(0,1),
    ];
});
$factory->define(App\Models\News::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->text($maxNbChars =50),
        'preview' => $faker->text($maxNbChars =50),
        'detail' => $faker->text($maxNbChars =500),
        'created_by' => $faker->name,
        'id_cat' =>rand(3,5),
    ];
});

$factory->define(App\Models\News::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->text($maxNbChars =20),
        'preview' => $faker->text($maxNbChars = 50),
        'detail' => $faker->text($maxNbChars = 500),
        'category_id'=> rand(1,10),
        'likes'=> rand(5,20),
    ];
});
$factory->define(App\Models\Profile::class, function (Faker\Generator $faker) {

    return [
        'fullname' => $faker->name,
        'user_id'=> 1,
    ];
});