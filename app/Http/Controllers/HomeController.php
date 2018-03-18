<?php

namespace App\Http\Controllers;
Use App\Barang;
Use DB;
class HomeController extends Controller
{
    public function getHome(){
    	//mencari berdasarkan id
    	/*$barang = Barang::find(2);*/
    	//menghapus berdasarkan id
    	/*$barang = Barang::destroy(2);*/
    	//Mencari semua data di tabel barang
    	/*$barang = Barang::all();*/

    	$barang = DB::table('barang')->get();
    	 dd($barang);
    	return view('welcome');
    }
}
