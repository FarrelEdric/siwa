<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\userModel;

class kegiatanModel extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';

    protected $primaryKey = "id_kegiatan";

    protected $fillable = [
        'id_user',
        'jenis_kegiatan',
        'tgl_kegitan',
        'lokasi'
    ];
    public $timestamps = false;
    public function  user(): BelongsTo
    {
        return $this->belongsTo(userModel::class, 'id_user');
    }
}
