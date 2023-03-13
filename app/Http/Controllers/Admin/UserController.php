<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Outlet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    //Menampilkan table!
    public function index()
    {
        $users = User::all();
        $outlets = Outlet::all();

        return view('admin.user.list', compact('users','outlets'));
    }

    //-------------------Tambah Data di table!--------------------------
//    public function create(){

//         return view('admin.paket.create');
//     }

    public function store(Request $request){

        $this->validate($request,[

            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'id_outlet' => 'required',
            'role' => 'required',
        ]);


        $users =User::create([

            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'id_outlet' => $request->id_outlet,
            'role' => $request->role,
            ]);



            return redirect('admin/user');
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
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'id_outlet' => 'required',
            'role' => 'required',
        ]);

    	$users =User::where('id_user',$request->id_user)->update([

            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'id_outlet' => $request->id_outlet,
            'role' => $request->role,
		]);
		// alihkan halaman ke halaman b erita
		return redirect('admin/user');

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
