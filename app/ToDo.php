<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    /* Traits */
    use App\Traits\ToDoTrait;

    class ToDo extends Model {

        use ToDoTrait;

        protected $table = 'to_do'; protected $primaryKey = "id";
        protected $guarded = [];

        public $timestamps = false;
    }
