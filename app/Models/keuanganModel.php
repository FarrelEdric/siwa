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

    protected $fillable = [
        'jenis_iuran',
        'jumlah_iuran',
        'no_kk',
        'date'


    ];

    public function kkPenduduk(): BelongsTo
    {
        return $this->belongsTo(kk_pendudukModel::class, 'no_kk');
    }
}
