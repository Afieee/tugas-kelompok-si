<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_matakuliah';
    protected $fillable = ['id_matakuliah','nama_matakuliah','sks','semester','perkuliahan','nip','id_jurusan'];
    protected $table = 'matakuliah';
    public $timestamps = false;


    public function dosen(){
        return $this->belongsTo(dosen::class, 'nip', 'nip');
    }

    public function jurusan(){
        return $this->belongsTo(dosen::class, 'id_jurusan', 'id_jurusan');
    }

}
