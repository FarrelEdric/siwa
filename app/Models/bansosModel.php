<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bansosModel extends Model
{
    use HasFactory;

    protected $table = 't_bansos';

    protected $primaryKey = 'id_bansos';

    public $timestamps = false;

    protected $fillable = [
        'nama_penerima',
        'c1',
        'c2',
        'c3',
        'c4',
        'c5',
        'c6',
        'c7',
        'c8',
    ];
}
