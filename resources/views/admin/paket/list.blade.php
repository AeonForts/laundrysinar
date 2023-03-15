@extends('layouts.app')
@section('content')
<h1 class="mt-4">Data Paket</h1>
    <!-- <a href="/outlet/create"  class="btn btn-success"> + Add New Data</a> -->
    <div class="bg-white mr-md-3 pt-3 pb-3 px-3 pt-md-5 px-md-5 overflow-hidden shadow rouded">
    <a href="#" onclick="ModalTambahPaket()"  class="btn btn-success"> + Add New Data</a>
    <div class="table-responsive">
            <table class="table table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope='col'>No</th>
                <th scope='col'>Nama Outlet</th>
                <th scope='col'>Jenis</th>
                <th scope='col'>Nama Paket</th>
                <th scope='col'>Harga</th>
                <th scope='col'>Action</th>
            </tr>
            </thead>
            @foreach ($pakets as $index => $Get)
            <tr>

                <td>{{$index +1}}</td>
                <td>{{$Get->outlet->nama}}</td>
                <td>{{$Get->nama_paket}}</td>
                <td>{{$Get->jenis}}</td>
                <td>{{$Get->harga}}</td>
                <td>
                    <a href="#" onclick="ModalEditPaket('{{$Get->id_paket}}','{{$Get->id_outlet}}','{{$Get->jenis}}','{{$Get->nama_paket}}','{{$Get->harga}}')"  data-bs-toggle="modal" data-bs-target="#ModalEditPaket" class="btn btn-info" >Update</a>
                    <!-- <a href="admin/outlet/edit/{{$Get->id_outlet}}" class="btn btn-warning"> Edit</a> -->
                    |
                    <a href="#" onclick="ModalHapusPaket({{ $Get->id_paket }})" class="btn btn-danger" >Delete</a>
                    <!-- <a href="admin/outlet/delete/{{ $Get->id_outlet }}" onclick="return confirm('Are you sure?')">Hapus</a> -->
                </td>
            </tr>
            @endforeach
            <!-- Button trigger modal -->


        <!-- Modal -->

            {{-- ModalEditPaket --}}
        </table>
    </div>
    </div>
@include('admin.paket.modal')




@endsection
