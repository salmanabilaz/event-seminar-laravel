<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $table = 'seminars';

    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriSeminar::class, 'kategori_id');
    }

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}