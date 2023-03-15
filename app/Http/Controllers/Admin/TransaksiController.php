<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Paket;
use App\Models\Outlet;
use App\Models\Transaksi;
use App\Models\Member;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DetailTransaksiController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
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
        $members = member::all();
        $pakets = Paket::all();
        $outlets = Outlet::all();
        $transaksis = Transaksi::all();
        return view('admin.transaksi.list', compact('transaksis','outlets','pakets','users','members'));
    }

    //-------------------Tambah Data di table!--------------------------

    public function store(Request $request){

        $transaksis =Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'id_outlet' => $request->id_outlet,
            'kode_invoice' => Hash::make($request->kode_invoice),
            'id_member' => $request->id_member,
            'id_paket' => $request->id_paket,
            'quantity' => $request->quantity,
            'keterangan' => $request->keterangan,
            'tgl' => $request->tgl,
            'batas_waktu' => $request->batas_waktu,
            'tgl_bayar' => $request->tgl_bayar,
            'biaya_tambahan' => $request->biaya_tambahan,
            'diskon' => $request->diskon,
            'pajak' => $request->pajak,
            'total' => $request->total,
            'status' => $request->status,
            'dibayar' => $request->dibayar,
            'id_user' => $request->id_user,
            ]);

            return redirect('admin/transaksi/list');
    }
    //-------------------End of Tambah Data---------------------------


    //-------------------Update Data di table!-----------------------

    public function update(Request $request)
    {
    	DB::table('tb_transaksi')->where('id_transaksi',$request->id_transaksi)->update([


            'id_transaksi' => $request->id_transaksi,
            'id_outlet' => $request->id_outlet,
            'kode_invoice' => $request->kode_invoice,
            'id_member' => $request->id_member,
            'tgl' => $request->tgl,
            'diskon' => $request->diskon,
            'pajak' => $request->pajak,
            'status' => $request->status,
            'dibayar' => $request->dibayar,
            'id_user' => $request->id_user,

		]);
		// alihkan halaman ke halaman berita
		return redirect('admin/transaksi/list');

    }

    //--------------------End Of Update Data------------------------------


    //----------------------Delete Data!----------------------------

    public function delete(Request $request)
    {
		$id_transaksi=$request->id_transaksi;
		$transaksis = Transaksi::where('id_transaksi',$id_transaksi)->delete();

		// alihkan halaman ke halaman berita
		return redirect('admin/transaksi/list');

    }

}
