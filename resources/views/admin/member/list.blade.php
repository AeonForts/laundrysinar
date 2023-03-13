@extends('layouts.app')
@section('content')
<h1 class="mt-4">Data Member</h1>
    <!-- <a href="/outlet/create"  class="btn btn-success"> + Add New Data</a> -->
    <div class="bg-light mr-md-3 pt-3 pb-3 px-3 pt-md-5 px-md-5 overflow-hidden shadow rouded">
    <a href="#" onclick="ModalTambahMember()"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahMember"> + Add New Data</a>
    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class='thead-dark'>
        <tr>
            <th scope='col'>No</th>
            <th scope='col'>Nama Pelanggan</th>
            <th scope='col'>Alamat</th>
            <th scope='col'>Jenis Kelamin</th>
            <th scope='col'>No Telepon</th>
            <th scope='col'>Opsi</th>
        </tr>
        </thead>
        @foreach ($members as $index => $Get)
        <tr>
            <td>{{$index +1}}</td>
            <td>{{$Get->nama}}</td>
            <td>{{$Get->alamat}}</td>
            <td>{{$Get->jenis_kelamin}}</td>
            <td>{{$Get->tlp}}</td>
            <td>
                <a href="#" onclick="ModalEditMember('{{ $Get->id_member}}','{{ $Get->nama }}','{{ $Get->alamat }}','{{ $Get->jenis_kelamin }}','{{ $Get->tlp }}' )" class="btn btn-info"  >Update</a>
                {{-- <!-- <a href="admin/outlet/edit/{{$Get->id_outlet}}" class="btn btn-warning"> Edit</a> --> --}}
                |
                <a href="#" onclick="ModalHapusMember({{ $Get->id_member }})" class="btn btn-danger" >Delete</a>
                {{-- <!-- <a href="admin/outlet/delete/{{ $Get->id_outlet }}" onclick="return confirm('Are you sure?')">Hapus</a> --> --}}
            </td>
        </tr>
        @endforeach

    </table>
    </div>
    </div>
@include('admin.member.modal')
@endsection
