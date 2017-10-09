<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pekerjaan extends Model
{
  public function kontraks()
  {
      return $this->hasMany(Kontrak::class);
  }
  public function userId()
  {
      return $this->belongsTo(User::class, 'user_id');
  }
}
