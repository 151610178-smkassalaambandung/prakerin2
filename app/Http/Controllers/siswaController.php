<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class siswaController extends Controller
{
    //
    public function perco()
    {
    	$z = siswa::all();
    	
    } 
    public function show($siswa)
    {
    	$siswa = siswa::find($siswa);
    	return view('latihan.siswa', compact('siswa'));
    }

}
