@extends('layouts.app')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row">

        <div class="col-md-12">
            <a class="btn btn-primary" href="/admin/transaksi" role="button">
                <i class="bi bi-arrow-left"></i> Back</a>
            <div class="card border-0 shadow rounded">
                <div class="card-body">

                    @foreach ($details as $detail)
                    <form action="/admin/transaksi/detail/{{$detail->id_detail_transaksi}}" method="POST">

                        @csrf

                        @foreach ($transaksis as $Get)

                        <div class="form-group">
                            <label class="font-weight-bold">Kode invoice</label>
                            <input type="text" class="form-control" id='kode_invoice' name="kode_invoice" value="{{ $Get->kode_invoice }}" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Outlet</label>
                            <input type="text" class="form-control" id='id_outlet' name="id_outlet" value="{{ $Get->outlet->nama }}" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Pelanggan</label>
                            <input type="text" class="form-control" id='id_member' name="id_member" value="{{ $Get->member->nama}}" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Paket</label>
                            <input type="text" class="form-control" id='nama_paket' name="nama_paket" value="{{ $detail->paket->nama_paket }}" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Jenis paket</label>
                            <input type="text" class="form-control" id='jenis_paket' name="jenis_paket" value="{{ $detail->paket->jenis }}" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Jumlah</label>
                            <input type="number" class="form-control" id='quantity' name="quantity" value="{{ $detail->quantity }}" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Keterangan</label>
                            <input type="text" class="form-control" id='keterangan' name="keterangan" value="{{ $detail->keterangan }}" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal Masuk</label>
                            <input type="text" class="form-control" id='tgl' name="tgl" value="{{ $Get->tgl }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Batas Waktu</label>
                            <input type="text" class="form-control" id='batas_waktu' name="batas_waktu" value="{{ $Get->batas_waktu }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal Dibayar</label>
                            <input type="text" class="form-control" id='tgl_bayar' name="tgl_bayar" value="{{ $Get->tgl_bayar }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Biaya Tambahan</label>
                            <input type="number" class="form-control" id='biaya_tambahan' name="biaya_tambahan" value="{{ $Get->biaya_tambahan }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Diskon</label>
                            <input type="double" class="form-control" id='diskon' name="diskon" value="{{ $Get->diskon }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Pajak</label>
                            <input type="text" class="form-control" id='pajak' name="pajak" value="{{ $Get->pajak }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Total</label>
                            <input type="text" class="form-control" id='total' name="total" value="{{ $Get->total }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Status</label>
                            <input type="text" class="form-control" id='status' name="status" value="{{ $Get->status }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Pembayaran</label>
                            <input type="text" class="form-control" id='dibayar' name="dibayar" value="{{ $Get->dibayar }}" placeholder="">
                        </div>

                        {{-- @endforeach --}}
                        {{-- <div class="form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $Get->alamat }}" placeholder="Masukkan Judul Blog">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Telephon</label>
                            <input type="text" class="form-control" name="tlp" value="{{ $Get->tlp }}" placeholder="Masukkan Judul Blog">

                        </div> --}}
                        @endforeach


                    </form>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'content' );
</script>

@endsection
