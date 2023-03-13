@extends('layouts.app')
@section('content')

    <!-- <a href="/outlet/create"  class="btn btn-success"> + Add New Data</a> -->
    <div class="bg-light mr-md-3 pt-3 pb-3 px-3 pt-md-5 px-md-5 overflow-hidden shadow rouded">
    <a href="#" onclick="ModalTambahUser()"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahUser"> + Add New Data</a>
<div class="table-responsive">
<table class="table table-bordered table-hover">
    <thead class="thead-dark">
    <tr>
        <th scope='col'>No</th>
        <th scope='col'>Nama</th>
        <th scope='col'>Outlet</th>
        <th scope='col'>Username</th>
        <th scope='col'>Role</th>
        <th scope='col'>Option</th>
    </tr>
    </thead>
    @foreach ($users as $index => $Get)
    <tr>
        <td>{{$index +1}}</td>
        <td>{{$Get->nama}}</td>
        <td>{{$Get->outlet->nama}}</td>
        <td>{{$Get->username}}</td>
        <td>{{$Get->role}}</td>
        <td>
            <a href="#" onclick="ModalEditUser('{{ $Get->id_user}}','{{ $Get->nama }}','{{ $Get->username }}','{{ $Get->id_outlet }}','{{ $Get->role }}','{{ $Get->password }}' )" class="btn btn-info"  >Update</a>

            |
            {{-- <a href="#" onclick="ModalHapusMember({{ $Get->id_member }})" class="btn btn-danger" >Delete</a> --}}

        </td>
    </tr>
    @endforeach

</table>
@include('admin.user.modal')
</div>
    </div>



@endsection
