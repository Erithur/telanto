<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use \GuzzleHttp\Client;

    /* Modelo */

    use App\ToDo;

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

    $factory->define(ToDo::class, function() {


        $client = new Client();

        $todosQuery = $client->request('GET', 'https://jsonplaceholder.typicode.com/todos', []);

        $todos = $todosQuery->getBody();
        $todos = json_decode($todos, true);

        foreach($todos AS $to_do) {
            ToDo::store($to_do);
        }

        return [];
    });
