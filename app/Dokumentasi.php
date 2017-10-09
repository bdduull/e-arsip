<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dokumentasi extends Model
{
  public function KegiatanId()
  {
      return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
  }
}
