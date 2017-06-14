<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswas';
    protected $fillabel = ['nama','alamat','jk'];
    protected $visible = ['nama','alamat','jk'];
    public $timestamps = true;
}
