<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisasiModel extends Model
{
    use HasFactory;
    protected $table = 'organisasi';

    protected $primaryKey = "id_organisasi";

    protected $fillalble =[
        'id_organisasi',
        'nama',
        'jabatan',
        'informasi'

    ];

}

