<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Wali extends Model
{
    use HasFactory;
    public $fillable = ['nama','foto','id_siswa'];

    public $timestamps = true;
    //Membuat one to one di Model 
    public function siswa()
    {
        //data dari model Wali bisa di Miliki oleh model Siswa
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
    public function image()
    {
        //data dari model Wali bisa di Miliki oleh model Siswa
        if($this->foto && file_exists(public_path('images/wali/'.$this->foto))) {
            return asset('images/wali/'.$this->foto);
        } else {
            return asset('images/no_image.jpg');

        }
    }

     public function deleteimage()
    {
        //data dari model Wali bisa di Miliki oleh model Siswa
        if($this->foto && file_exists(public_path('images/wali/'.$this->foto))) {
            return unlink(public_path('images/wali/'.$this->foto));
        } 
    }

}
