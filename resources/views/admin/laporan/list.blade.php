@extends('layouts.app')
@section('content')

    <!-- <a href="/outlet/create"  class="btn btn-success"> + Add New Data</a> -->
    <div class="bg-light mr-md-3 pt-3 pb-3 px-3 pt-md-5 px-md-5 overflow-hidden shadow rouded">
    <a href="#" onclick="ModalTambahMember()"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahMember"> + Add New Data</a>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope='col'>No</th>
        <th scope='col'>Nama Paket</th>
        <th scope='col'>Jumlah Transaksi</th>
        <th scope='col'>Tanggal Transaksi</th>
        <th scope='col'>Total Hasil</th>

    </tr>
    </thead>
    {{-- @foreach ($members as $index => $Get)
    <tr>
        <td>{{$index +1}}</td>
        <td>{{$Get->id_transaksi}}</td>
        <td>{{$Get->id_outlet}}</td>
        <td>{{$Get->kode_invoice}}</td>
        <td>{{$Get->id_member}}</td>
        <td>{{$Get->tgl}}</td>
        <td>{{$Get->dibayar}}</td>
        <td>{{$Get->harga}}</td>
        <td>
            <a href="#" onclick="ModalEditMember('{{ $Get->id_member}}','{{ $Get->nama }}','{{ $Get->alamat }}','{{ $Get->jenis_kelamin }}','{{ $Get->tlp }}' )" class="btn btn-info"  >Update</a>
             <a href="admin/outlet/edit/{{$Get->id_outlet}}" class="btn btn-warning"> Edit</a>
            |
            <a href="#" onclick="ModalHapusMember({{ $Get->id_member }})" class="btn btn-danger" >Delete</a>
            <a href="admin/outlet/delete/{{ $Get->id_outlet }}" onclick="return confirm('Are you sure?')">Hapus</a>
        </td>
    </tr>
    @endforeach --}}

</table>
@include('admin.member.modal')
    </div>



@endsection
