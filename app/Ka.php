<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ka extends Model
{
    protected $fillable = [
      'acc'
    ];

    public function KegiatanId()
    {
      return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }
    public function UserId()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
