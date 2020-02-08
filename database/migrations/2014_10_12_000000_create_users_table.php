<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateUsersTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
        */

        public function up() {

            Schema::create('users', function (Blueprint $table) {

                $table->increments('id');

                $table->string('name');
                $table->string('username');
                $table->string('email')->unique();

                $table->string('address_street');
                $table->string('address_suite');
                $table->string('address_city');
                $table->string('address_zipcode');

                $table->string('address_geo_lat');
                $table->string('address_geo_lng');

                $table->string('phone');
                $table->string('website');

                $table->string('company_name');
                $table->string('company_catchPhrase');
                $table->string('company_bs');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
        */

        public function down() {
            Schema::dropIfExists('users');
        }
    }
