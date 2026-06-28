<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriSeminar extends Model
{
    protected $table = 'kategori_seminars';

    protected $guarded = ['id'];

    public function seminar()
    {
        return $this->hasMany(Seminar::class);
    }
}