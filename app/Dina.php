<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dina extends Model
{
    public function kontraks()
    {
        return $this->hasMany(Kontrak::class);
    }
}
