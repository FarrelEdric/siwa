<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\pendudukModel;
class penduduk_masukModel extends Model
{
    use HasFactory;
    protected $table ='penduduk_keluar';

    protected $primaryKey ="id_penduduk_masuk";

    protected $fillalble =[
        'id_penduduk',
        'nama_penduduk_masuk',
        'alamat_penduduk_masuk'

    ];
    public function penduduk_masuk(): BelongsTo
    {
        return $this->belongsTo(pendudukModel::class, 'id_penduduk');
    }

}
