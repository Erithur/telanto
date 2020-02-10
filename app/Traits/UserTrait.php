<?php

    namespace App\Traits;

    /* Modelo */

    use App\User;

    trait UserTrait {

        public static function store($data) {

            User::updateOrCreate([
                'id' => $data['id']
            ], $data);
        }
    }
