<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function displaySejarah()
    {
        return view('sejarah_singkat');
    }

    public function displayStruktur()
    {
        return view('struktur');
    }

    public function displayVisi()
    {
        return view('visimisi');
    }

    public function displayKB()
    {
        return view('kb');
    }
    
    public function displayTPA()
    {
        return view('tpa');
    }

    public function displayFoto()
    {
        return view('foto');
    }

    public function displayEks()
    {
        return view('ekstra');
    }

    public function displayDownload()
    {
        return view('download');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$search_pages = DB::table('search_pages')
		->where('name','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('search',['search_pages' => $search_pages]);

	}
}
