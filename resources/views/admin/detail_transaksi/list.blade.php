@extends('layouts.app')
@section('content')

    <!-- <a href="/outlet/create"  class="btn btn-success"> + Add New Data</a> -->
    <a href="#" onclick="ModalTambahDetailT()"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahDetailT"> + Add New Data</a>
<table class="table table-bordered">
    <tr>
        <th scope='col'>Kode Invoice</th>
        <th scope='col'>Outlet</th>
        <th scope='col'>Palanggan</th>
        <th scope='col'>Jenis paket</th>
        <th scope='col'>Jumlah</th>
        <th scope='col'>Keterangan</th>
    </tr>

    @foreach ($detail_transaksiX as $index => $Get)
    <tr>
        <td>{{$index +1}}</td>
        <td>{{$Get->id_paket}}</td>
        <td>{{$Get->id_transaksi}}</td>
        <td>{{$Get->quantity}}</td>
        <td>{{$Get->keterangan}}</td>
        <td>
            <a href="#" onclick="ModalEditDetailT('{{ $Get->id_detail_transaksi }}','{{ $Get->id_paket }}','{{ $Get->id_transaksi }}','{{ $Get->quantity }}','{{ $Get->keterangan }}' )" class="btn btn-info"  >Update</a>
            {{-- <!-- <a href="admin/outlet/edit/{{$Get->id_outlet}}" class="btn btn-warning"> Edit</a> --> --}}
            |
            <a href="#" onclick="ModalHapusDetailT({{ $Get->id_detail_transaksi }})" class="btn btn-danger" >Delete</a>
            {{-- <!-- <a href="admin/outlet/delete/{{ $Get->id_outlet }}" onclick="return confirm('Are you sure?')">Hapus</a> --> --}}
        </td>
    </tr>
    @endforeach

</table>
@include('admin.detail_transaksi.modal')




@endsection
