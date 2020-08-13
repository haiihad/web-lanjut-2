<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $primaryKey = 'kode_prodi';

     
    protected $fillable = ['kode_prodi','nama_prodi','kaprodi',''];

    //Field yang diabaikan isiannya
    protected $guarded = [];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa','prodi','kode_prodi');
    }
}