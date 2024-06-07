<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisasiModel extends Model
{
    use HasFactory;
    protected $table = 'organisasi';

    protected $primaryKey = "id_organisasi";

    public $timestamps = false;
    protected $fillable = [
        'nama',
        'jabatan',
        'masaJabatan',
        'no_tlp',
        'alamat',
        'email',

    ];
}
