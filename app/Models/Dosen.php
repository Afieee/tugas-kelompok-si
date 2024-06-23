<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $primaryKey = 'nip';
    protected $fillable = ['nip', 'nama_dosen', 'email', 'password', 'gender', 'no_handphone'];
    protected $table = 'dosen';
    public $timestamps = false;

    public function matakuliah(){
        return $this->hasMany(Matakuliah::class);
    }

}
