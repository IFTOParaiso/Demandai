<?php

use Faker\Factory as Faker;

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
$factory->define(App\Entities\Institution::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'description'=> $faker->sentence,
        'email'=> $faker->unique()->safeEmail,
        'phone'=> $faker->phoneNumber,
		'site'=> $faker->unique()->safeEmail,
		'status'=> $faker->boolean,
		'street'=> $faker->locale,
		'number'=> $faker->numberBetween(1,999999999),
		'sector'=> $faker->locale,
		'city'=> $faker->locale,
		'complement'=> $faker->locale,

    ];
});
$factory->define(App\Entities\User::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'email'=> $faker->unique()->safeEmail,
        'formation'=> $faker->numberBetween(1,9),
        'lattes'=> $faker->sentence,
        'status'=> $faker->boolean,
        'institution_id'=> $faker->numberBetween(1,999999999),
        'password'=> '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token'=> str_random(10),
    ];
});
$factory->define(App\Entities\Publish::class, function (Faker $faker) {
    return [
        'title'=> $faker->title,
		'description'=> $faker->sentence,
		'date_closure'=> $faker->dateTimeAD,
		'link'=> $faker->sentence,

    ];
});
$factory->define(App\Entities\BigArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'status'=> $faker->boolean,

    ];
});
$factory->define(App\Entities\Area::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
		'status'=> $faker->boolean,
		'big_area_id'=> $faker->numberBetween(1,999999999),

    ];
});
$factory->define(App\Entities\AreaUser::class, function (Faker $faker) {
    return [
        'area_id'=> $faker->numberBetween(1,999999999),
        'user_id'=> $faker->numberBetween(1,999999999),

    ];
});
$factory->define(App\Entities\AreaPublish::class, function (Faker $faker) {
    return [
        'area_id'=> $faker->numberBetween(1,999999999),
        'publish_id'=> $faker->numberBetween(1,999999999),
    ];
});
$factory->define(App\Entities\PublishUser::class, function (Faker $faker) {
    return [
        'interest'=> $faker->numberBetween(1,999999999),
		'user_id'=> $faker->numberBetween(1,999999999),
		'publish_id'=> $faker->numberBetween(1,999999999),
    ];
});
$factory->define(App\Entities\TypeUser::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'description'=> $faker->sentence,
		'status'=> $faker->boolean,
    ];
});
$factory->define(App\Entities\UserTypeUser::class, function (Faker $faker) {
    return [
        'user_id'=> $faker->numberBetween(1,999999999),
		'type_user_id'=> $faker->numberBetween(1,999999999),
    ];
});
