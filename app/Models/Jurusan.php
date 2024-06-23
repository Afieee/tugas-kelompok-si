<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_jurusan';
    protected $fillable = ['id_jurusan','nama_jurusan'];
    protected $table = 'jurusan';
    public $timestamps = false;

    public function matakuliah(){
        return $this->hasMany(matakuliah::class);
    }
}
