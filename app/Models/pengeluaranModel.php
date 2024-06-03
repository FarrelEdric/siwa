<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaranModel extends Model
{
    use HasFactory;

    protected $table = 'pengeluaran';
    protected $primaryKey = 'id_pengeluaran';
    protected $fillable = ['user_id', 'date', 'pengeluaran_iuran', 'keterangan_pengeluaran'];

    public function user()
    {
        return $this->belongsTo(userModel::class, 'user_id');
    }
}
