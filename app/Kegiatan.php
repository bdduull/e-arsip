<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kegiatan extends Model
{
  public function userId()
  {
      return $this->belongsTo(User::class, 'user_id');
  }
  public function dinasId()
  {
      return $this->belongsTo(Dina::class, 'dinas_id');
  }
}
