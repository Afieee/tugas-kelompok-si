<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'nim';
    protected $fillable = ['nim', 'nama_mahasiswa', 'email', 'password', 'gender', 'no_handphone'];
    protected $table = 'mahasiswa';
    public $timestamps = false;


}
