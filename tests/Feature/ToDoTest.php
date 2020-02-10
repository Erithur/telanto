<?php

    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Illuminate\Foundation\Testing\WithFaker;
    use Tests\TestCase;

    class ToDoTest extends TestCase {

        use DatabaseMigrations;

        /**
         * A basic unit test example.
         *
         * @return void
        */

        public function testToDosStore() {

            $response = $this->json('POST', '/api/v1/todos', [
                'user_id' => 3,
                'title' => 'Lorem ipsum'
            ]);

            $response->assertStatus(200);
        }
    }
