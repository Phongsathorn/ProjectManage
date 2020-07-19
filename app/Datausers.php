<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataproject extends Model
{
    //
    protected $table = 'users';
    protected $filtable = 'id';
    public function Dataproject() {
        return $this->hasMany(Dataproject::class);
    }

}
