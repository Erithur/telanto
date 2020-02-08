<?php

    namespace App\Traits;

    /* Modelo */

    use App\ToDo;

    trait ToDoTrait {

        public static function store($data) {

            $id = $data['id'] ?? (ToDo::latest('id')->first()['id'] + 1);

            ToDo::updateOrCreate([
                'id' => $id
            ], $data);

            echo "Trait executed";
        }
    }
