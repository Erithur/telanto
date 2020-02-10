<?php

    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Tests\TestCase;

    class UserTest extends TestCase {

        use DatabaseMigrations;

        /**
         * A basic unit test example.
         *
         * @return void
        */

        public function testUserToDos() {

            $this->withHeaders([
                'X-Requested-With' => 'XMLHttpRequest',
            ])->get('/api/v1/users/2/todos')->assertStatus(200);
        }
    }
