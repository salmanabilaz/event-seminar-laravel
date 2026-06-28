<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'pesertas';

    protected $guarded = ['id'];

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}