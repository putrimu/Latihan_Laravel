<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use App\Barang;

class BarangController extends Controller
{
   	public function getBarang(){
    	$barang = DB::table('barang')->get();
    	 dd($barang);
    } 
 
    public function getNamaBarang($nama){
    	$barang = Barang::where('nama', $nama)->first();
    	if(is_null($barang)){
    		return 'Nama Barang Tidak ada';
    	}else {	
    		return $barang->nama;
    	}
    	 dd($barang);
    }

    public function getKode(){
    	$barang = DB::table('barang')->get();
    	 dd($barang);
    }
    
}
