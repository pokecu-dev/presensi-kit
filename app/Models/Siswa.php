<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nis',
        'nama',
        'id_kelas'
    ];

    public $timestamps = false;

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas','id');
    }

}
