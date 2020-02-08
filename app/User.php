<?php

    namespace App;

    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    /* Traits */
    use App\Traits\UserTrait;

    class User extends Authenticatable {

        use UserTrait;

        protected $table = "users";
        protected $primaryKey = "id";
        protected $guarded = [];

        public $timestamps = false;

        public function todos() {
            return $this->hasMany(ToDo::class, 'userId', 'id')->select('id', 'title', 'completed', 'createdOn');
        }
    }
