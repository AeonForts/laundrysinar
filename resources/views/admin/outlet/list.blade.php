@extends('layouts.app')
@section('content')
<h1 class="mt-4">Data Outlet</h1>
<div class="bg-light mr-md-3 pt-3 pb-3 px-3 pt-md-5 px-md-5 overflow-hidden shadow rouded">
    <!-- <a href="/outlet/create"  class="btn btn-success"> + Add New Data</a> -->
    <a href="#" onclick="ModalTambahOutlet()"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahOutlet"> + Add New Data</a>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope='col'>No</th>
        <th scope='col'>Nama</th>
        <th scope='col'>Alamat</th>
        <th scope='col'>Telephon</th>
        <th scope='col'>Action</th>
    </tr>
</thead>
    @foreach ($outlets as $index => $Get)
    <tr>
        <td>{{$index +1}}</td>
        <td>{{$Get->nama}}</td>
        <td>{{$Get->alamat}}</td>
        <td>{{$Get->tlp}}</td>
        <td>
            <a href="#" onclick="ModalEditOutlet('{{ $Get->id_outlet }}' ,'{{$Get->nama}}','{{$Get->alamat}}','{{$Get->tlp}}')" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#ModalEditOutlet">Update</a>
            <!-- <a href="admin/outlet/edit/{{$Get->id_outlet}}" class="btn btn-warning"> Edit</a> -->
            |
            <a href="#" onclick="ModalHapusOutlet({{ $Get->id_outlet }})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapusOutlet">Delete</a>
            <!-- <a href="admin/outlet/delete/{{ $Get->id_outlet }}" onclick="return confirm('Are you sure?')">Hapus</a> -->
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>

@include('admin.outlet.modal')




@endsection
