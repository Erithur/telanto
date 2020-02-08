<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use \GuzzleHttp\Client;

    /* Modelo */

    use App\User;

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

    $factory->define(User::class, function() {


        $client = new Client();

        $usersQuery = $client->request('GET', 'https://jsonplaceholder.typicode.com/users', []);

        $users = $usersQuery->getBody();
        $users = json_decode($users, true);

        foreach($users AS $user) {

            $user['address_street'] = $user['address']['street'];
            $user['address_suite'] = $user['address']['suite'];
            $user['address_city'] = $user['address']['city'];
            $user['address_zipcode'] = $user['address']['zipcode'];
            $user['address_geo_lat'] = $user['address']['geo']['lat'];
            $user['address_geo_lng'] = $user['address']['geo']['lng'];

            unset($user['address']);

            $user['company_name'] = $user['company']['name'];
            $user['company_catchPhrase'] = $user['company']['catchPhrase'];
            $user['company_bs'] = $user['company']['bs'];

            unset($user['company']);

            User::store($user);
        }

        return [];
    });
