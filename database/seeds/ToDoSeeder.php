<?php

    use Illuminate\Database\Seeder;

    /* Modelo */

    use App\ToDo;

    class ToDoSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
        */

        public function run() {
            factory(ToDo::class)->make();
        }
    }
