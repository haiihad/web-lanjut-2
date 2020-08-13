<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
        protected $table = ('mahasiswa');
        protected $primaryKey = 'npm' ;
        protected $fillable = ['npm','nama_lengkap','prodi','alamat'];
        protected $guarded =[];

        public function mprodi()
        {
                return $this->hasOne('App\prodi','kode_prodi','prodi');
        }
}