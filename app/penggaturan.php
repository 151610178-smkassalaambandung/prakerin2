<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penggaturan extends Model
{
    protected $table = 'penggaturan';
    protected $fillable = ['nama_situs','alamat_situs','email'];
    protected $visible = ['nama_situs','alamat_situs','email'];
    public $timestamps = true;
}
