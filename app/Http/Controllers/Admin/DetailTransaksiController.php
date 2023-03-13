<?php

namespace App\Http\Controllers\Admin;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use App\Models\Paket;
use App\Models\Outlet;
use App\Models\Member;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DetailTransaksiController extends Controller
{
   /**
     * index
     *
     * @return void
     */
    //Menampilkan table!
    public function index($id)
    {
        $details = DetailTransaksi::all();
        $transaksis = Transaksi::where('id_transaksi',$id)->get();

        return view('admin.transaksi.detail', compact('details' ,'transaksis'));
    }

<<<<<<< HEAD
=======

    
>>>>>>> 3cc5823 (Commit laundrysinar)
    //-------------------Tambah Data di table!--------------------------

    // public function store(Request $request){

    //     $detail =DetailTransaksi::create([
    //         'id_transaksi' =>$request->id_transaksi,
    //         'id_paket' =>$request->id_paket,
    //         'quantity' =>$request->id_quantity,
    //         'keterangan' =>$request->id_keterangan,
    //         ]);

    //         return redirect('admin/detail/list');
    // }
    // //-------------------End of Tambah Data---------------------------
<<<<<<< HEAD

    // //-------------------Update Data di table!-----------------------

=======
        
    // //-------------------Update Data di table!-----------------------

    public function edit($id)
    {
        $details = DetailTransaksi::all();
        $transaksis = Transaksi::where('id_transaksi',$id)->get();

        return view('admin.transaksi.detail',compact('details' ,'transaksis'));
    }

>>>>>>> 3cc5823 (Commit laundrysinar)
    // public function update(Request $request)
    // {
    // 	DB::table('tb_detail_transaksi')->where('id_detail_transaksi',$request->id_detail_transaksi)->update([


    //         'id_transaksi' =>$request->id_transaksi,
    //         'id_paket' =>$request->id_paket,
    //         'quantity' =>$request->quantity,
    //         'keterangan' =>$request->keterangan,

	// 	]);
	// 	// alihkan halaman ke halaman berita
	// 	return redirect('admin/member/list');

    // }

    // //--------------------End Of Update Data------------------------------


    // //----------------------Delete Data!----------------------------

    // public function delete(Request $request)
    // {
	// 	$id_detail_transaksi=$request->id_detail_transaksi;
	// 	$detail = DetailTransaksi::where('id_detail_transaksi',$id_detail_transaksi)->delete();

	// 	// alihkan halaman ke halaman berita
	// 	return redirect('admin/member/list');

    // }

}
