<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a = "Ambang";
    	return "Nama Saya Adalah : ".$a;
    }

    //passing data view
    public function percobaan2()
    {
    	return view('about');
    }

    //passing data variabel to view compact
    public function percobaan3()
    {
    	$a = "Kurniawan";
    	return view ('latihan.saya', compact('a'));
    }
    //
    public function percobaan4()
    {
    	$b = "Ambang Kurniawan";
    	$c = "XI RPL 3";
    	$d = "SMK Assalaam Bandung";
    	return view ('latihan.latihan', compact('b','c','d')); 
 	}
 	//
 	public function percobaan5()
 	{
 		$e = 1;
 		$f = 2;
 		$g = 3;
 		return view('latihan.seleksi',compact('e','f','g'));
 	}

 	public function percobaan6()
 	{
 		$buah = ['Mangga','Jeruk','apel','anggur'];
 		return view('latihan.buah',compact('buah'));
 	}
     
     public function param($data1, $data2= null)
    {
    $array = array('binatang'=>['macan'=>['macan kemayoran','maungbandung'],
                                'hamster'=>['hamtaro','hamtari'],
                                'kelinci'=>['anggora','persia']],
                   'buahan'=>  ['mangga'=>['harum manis','marijan'],
                                'alpukat'=>['hijau','hitam'],
                                'apel'=>['fuji','gerhana']],
                   'komputer'=>['assus'=>['1234','12345'],
                                'dell'=>['alienware','gagalware'],
                                'acer'=>['876','8765']]
                                );
                if ($data1){
                $query = (array_keys($array[$data1]));
                           }
                if ($data2){
                    $query = (($array[$data1][$data2]));
                           }
        return view('latihan.campur',compact('query','data1','data2'));
    } 
    
 }