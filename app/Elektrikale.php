<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Elektrikale extends Model
{
  public function KegiatanId()
  {
    return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
  }
}
