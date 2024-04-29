<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use app\Models\pendudukModel;

class userModel extends Model
{
    use HasFactory;
    protected $table = 'user';

    protected $primaryKey = "id_user";

    protected $fillalble = [
        'id_penduduk',
        'level_id',
        'nama_surat',
        'username',
        'password'



    ];
    public function penduduk(): BelongsTo
    {
        return $this->belongsTo(pendudukModel::class, 'id_penduduk');
    }
    public function level(): BelongsTo
    {
        return $this->belongsTo(levelModel::class, 'level_id');
    }
}
