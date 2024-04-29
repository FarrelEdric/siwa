<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\pendudukModel;

class penduduk_keluarModel extends Model
{
    use HasFactory;

    protected $table ='penduduk_keluar';

    protected $primaryKey ="id_penduduk_keluar";

    protected $fillalble =[
        'id_penduduk',
        'nama_penduduk_keluar',
        'alamat_penduduk_keluar'

    ];
    public function penduduk_keluar(): BelongsTo
    {
        return $this->belongsTo(pendudukModel::class, 'id_penduduk');
    }

}
