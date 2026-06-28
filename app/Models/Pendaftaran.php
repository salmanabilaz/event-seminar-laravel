<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftarans';

    protected $guarded = ['id'];


    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }


    public function seminar()
    {
        return $this->belongsTo(Seminar::class);
    }
}