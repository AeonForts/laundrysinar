<?php

namespace App\Http\Controllers\Admin;

use App\Models\Paket;
use App\Models\Outlet;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OutletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    //Menampilkan table!
    public function index()
    {
        $pakets = Paket::all();
        $outlets = Outlet::all();

        return view('admin.paket.list', compact('pakets','outlets'));
    }

    //-------------------Tambah Data di table!--------------------------
   public function create(){

        return view('admin.paket.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'id_outlet' => 'required',
            'nama_paket' => 'required|max:100',
            'jenis' => 'required',
            'harga' => 'required|numeric',
        ]);


        $pakets =Paket::create([
            'id_outlet' => $request->id_outlet,
            'nama_paket' => $request->nama_paket,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            ]);



            return redirect('admin/paket/list');
    }
    //-------------------End of Tambah Data---------------------------

    //-------------------Update Data di table!-----------------------
    //  public function edit($id)
    // {
    //     // mengambil data pegawai berdasarkan id yang dipilih
    //     $outlets = Outlet::where('id_outlet',$id)->get();
    //     // passing data pegawai yang didapat ke view edit.blade.php
    //     return view('outlet.edit',['outlet' => $outlets]);
    // }

    public function update(Request $request)
    {
        // Validasi jika data yang diupdate sesuai dengan keinginan yang dimasukan di method
        $this->validate($request,[
            'id_outlet' => 'required',
            'nama_paket' => 'required|max:100',
            'jenis' => 'required',
            'harga' => 'required|numeric',
        ]);

    	$pakets =Paket::where('id_paket',$request->id_paket)->update([

            'id_outlet' => $request->id_outlet,
            'jenis' => $request->jenis,
            'nama_paket' => $request->nama_paket,
            'harga' => $request->harga,
		]);
		// alihkan halaman ke halaman berita
		return redirect('admin/paket/list');

    }

    //--------------------End Of Update Data------------------------------


    //----------------------Delete Data!----------------------------

    public function delete(Request $request)
    {
		$id_paket=$request->id_paket;
		$pakets = Paket::where('id_paket',$id_paket)->delete();

		// alihkan halaman ke halaman berita
		return redirect('admin/paket/list');

    }
}
