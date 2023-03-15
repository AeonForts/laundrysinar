@extends('layouts.app')
@section('content')

    <!-- <a href="/outlet/create"  class="btn btn-success"> + Add New Data</a> -->
    <div class="bg-light mr-md-3 pt-3 pb-3 px-3 pt-md-5 px-md-5 overflow-hidden shadow rouded">
    <a href="#" onclick="ModalTambahTransaksi()"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahTransaksi"> + Add New Data</a>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope='col'>No</th>
        <th scope='col'>Invoice</th>
        <th scope='col'>Member</th>
        <th scope='col'>Status</th>
        <th scope='col'>Pembayaran</th>
        <th scope='col'>Total Harga</th>
        <th scope='col'>Detail</th>
    </tr>
    </thead>
    @foreach ($transaksis as $index => $Get)
    <tr>
        <td>{{$index +1}}</td>
        <td>{{$Get->kode_invoice}}</td>
        <td>{{$Get->member->nama}}</td>
        <td>{{$Get->status}}</td>
        <td>{{$Get->dibayar}}</td>
        <td>{{$Get->total}}</td>
        <td>
            <a href="/admin/transaksi/detail/{{$Get->id_transaksi}}" class="btn btn-info"  >Detail</a>
             {{-- <a href="admin/outlet/edit/{{$Get->id_outlet}}" class="btn btn-warning"> Edit</a>
            |
            <a href="#" onclick="ModalHapusMember({{ $Get->id_transaksi  }})" class="btn btn-danger" >Delete</a> --}}
        </td>
    </tr>
    @endforeach

</table>
@include('admin.member.modal')
    </div>



@endsection
