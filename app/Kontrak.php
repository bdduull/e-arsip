<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Kontrak extends Model
{
    public function KegiatanId()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }
    public function DinasId()
    {
        return $this->belongsTo(Dina::class, 'dinas_id');
    }
}
