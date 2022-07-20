<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    //filed apa saja yang bisa diisi
    public $fillable = ['nama','nis','jenis_kelamin','agama','tgl_lahir','alamat'];
    //membuat fitur created_at(kapan date di buat) & update_at (kapan data diedit)
    //aktif
    public $timestamps = true;

}
