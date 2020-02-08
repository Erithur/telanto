<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Support\Facades\DB;

    class CreateToDosTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
        */

        public function up() {

            Schema::create('to_do', function (Blueprint $table) {

                $table->increments('id');

                $table->unsignedInteger('userId');

                $table->string('title');

                $table->boolean('completed')->default('false');

                $table->timestamp('createdOn')->default(DB::raw('CURRENT_TIMESTAMP'));

                $table->foreign('userId')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
        */

        public function down() {
            Schema::dropIfExists('to_do');
        }
    }
