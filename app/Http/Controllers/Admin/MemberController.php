<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    //Menampilkan table!
    public function index()
    {
        $members = DB::table('tb_member')->paginate(10);
        return view('admin.member.list', ['members'=>$members]);
    }

    //-------------------Tambah Data di table!--------------------------

    public function store(Request $request){

        $members =Member::create([
            'id_member' => $request->id_member,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tlp' => $request->tlp,
            ]);

            return redirect('admin/member/list');
    }
    //-------------------End of Tambah Data---------------------------

    //-------------------Update Data di table!-----------------------

    public function update(Request $request)
    {
    	DB::table('tb_member')->where('id_member',$request->id_member)->update([


            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tlp' => $request->tlp,

		]);
		// alihkan halaman ke halaman berita
		return redirect('admin/member/list');

    }

    //--------------------End Of Update Data------------------------------


    //----------------------Delete Data!----------------------------

    public function delete(Request $request)
    {
		$id_member=$request->id_member;
		$member = Member::where('id_member',$id_member)->delete();

		// alihkan halaman ke halaman berita
		return redirect('admin/member/list');

    }

}
