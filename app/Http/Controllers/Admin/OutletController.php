<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class OutletController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    //Menampilkan table!
    public function index()
    {
        $outlets = DB::table('tb_outlet')->paginate(10);
        return view('admin.outlet.list', ['outlets'=>$outlets]);
    }

    //-------------------Tambah Data di table!--------------------------
    public function create(){
        return view('admin.outlet.create');
    }

    public function store(Request $request){

        $outlets =Outlet::create([
            'id_outlet' => $request->id_outlet,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
            ]);

            return redirect('admin/outlet/list');
    }
    //-------------------End of Tambah Data---------------------------

    //-------------------Update Data di table!-----------------------
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $outlets = Outlet::where('id_outlet',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('outlet.edit',['outlet' => $outlets]);
    }

    public function update(Request $request)
    {
    	DB::table('tb_outlet')->where('id_outlet',$request->id_outlet)->update([

			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'tlp' => $request->tlp,

		]);
		// alihkan halaman ke halaman berita
		return redirect('admin/outlet/list');

    }

    //--------------------End Of Update Data------------------------------


    //----------------------Delete Data!----------------------------

    public function delete(Request $request)
    {
		$id_outlet=$request->id_outlet;
		$outlet = Outlet::where('id_outlet',$id_outlet)->delete();

		// alihkan halaman ke halaman berita
		return redirect('admin/outlet/list');

    }

}
