<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_bagian',
        'id_pabrik',
    ];

    public $timestamps = false;

    public function pabrik() {
        return $this->belongsTo(Pabrik::class);
    }

    public function barang() {
        return $this->hasMany(Barang::class);
    }
}
