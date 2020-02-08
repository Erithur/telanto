<?php

    use Illuminate\Database\Seeder;

    /* Modelo */
    
    use App\User;

    class UserSeeder extends Seeder {

        /**
         * Run the database seeds.
         *
         * @return void
        */

        public function run() {
            factory(User::class)->make();
        }
    }
