<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class keuanganModel extends Model
{
    use HasFactory;
    protected $table = 'keuangan';

    protected $primaryKey = "id_keuangan";

    protected $fillalble = [
        'jenis_iuran',
        'jumlah_iuran',
       

    ];
}
