<!-- Form Modal Hapus Member-->

<!-- Form Modal Tambah Member -->
<<<<<<< HEAD
<form action="{{ route('store_member') }}" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahMember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
<form action="{{ route('store_transaksi') }}" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahTransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> 3cc5823 (Commit laundrysinar)
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
<<<<<<< HEAD
                        <label class="form-label">No Invoice</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id='jenis_kelamin' required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="laki_laki">Laki Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telephon</label>
                        <input type="number" name="tlp" class="form-control" required>
=======
                        <label class="form-label">Invoice</label>
                        <input type="text" name="kode_invoice" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Outlet</label>
                        <select class="form-control" name="id_outlet" id='id_outlet' required>
                            <option value="">Pilih Outlet</option>
                            @foreach ($outlets as $Get)
                                <option value="{{ $Get->id_outlet }}">
                                    {{ $Get->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama paket</label>
                        <select class="form-control" name="id_paket" id='id_paket' required>
                            <option value="">Pilih Paket</option>
                            @foreach ($pakets as $Get)
                                <option value="{{ $Get->id_paket }}">
                                    {{ $Get->nama_paket }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pelanggan</label>
                        <select class="form-control" name="id_member" id='id_member' required>
                            <option value="">List Member</option>
                            @foreach ($members as $Get)
                                <option value="{{ $Get->id_member }}">
                                    {{ $Get->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Laundry Masuk</label>
                        <input type="date" name="tgl" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Batas Waktu</label>
                        <input type="date" name="batas_waktu" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Charge Tambahan</label>
                        <input type="number" name="biaya_tambahan" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Diskon</label>
                        <input type="double" name="diskon" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pajak</label>
                        <input type="number" name="pajak" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Total Harga</label>
                        <input type="number" name="total" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status" id='status' required>
                            <option value="">Select Status</option>
                            <option value="baru">Baru</option>
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                            <option value="diambil">Diambil</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Dibayar</label>
                        <select class="form-control" name="dibayar" id='status' required>
                            <option value="">Select Status</option>
                            <option value="belum_dibayar">Belum Dibayar</option>
                            <option value="dibayar">Dibayar</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pelanggan</label>
                        <select class="form-control" name="id_user" id='id_user' required>
                            <option value="">List Member</option>
                            @foreach ($users as $Get)
                                <option value="{{ $Get->id_user }}">
                                    {{ $Get->nama }}
                                </option>
                            @endforeach
                        </select>
>>>>>>> 3cc5823 (Commit laundrysinar)
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>




<form action="{{ route('update_member') }}" method="post">
    @csrf
    <div class="modal fade" id="ModalEditMember" tabindex="-1" aria-labelledby="ModalEditMemberLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <input type="hidden" class="form-control" name="id_member" id="id_member" required>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id='jenis_kelamin' required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="laki_laki">Laki Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telephon</label>
                        <input type="number" name="tlp" class="form-control" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
                </div>
            </div>
        </div>
        </div>
</form>

<!-- Form Modal Hapus Member-->
<form action="{{route('delete_member')}}" method="post">
    @csrf
<div class="modal fade" id="ModalHapusMember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="id_member">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
      </div>
    </div>
  </div>
</form>











<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
<script>
    // Modal Tambah Member
<<<<<<< HEAD
    function ModalTambahMember() {
        console.log(jenis);
        $('#ModalTambahMember').modal('show');
=======
    function ModalTambahTransaksi() {
        console.log(jenis);
        $('#ModalTambahTransaksi').modal('show');
>>>>>>> 3cc5823 (Commit laundrysinar)
    }
    // Modal Tambah Member

    // Modal Edit Member
    function ModalEditMember(id_member,nama,alamat,jenis_kelamin,tlp) {
        // console.log(nama_paket);
        // console.log(nama_paket);
        $('[name="id_member"]').val(id_member);
        $('[name="nama"]').val(nama);
        $('[name="alamat"]').val(alamat);
        $('[name="jenis_kelamin"]').val(jenis_kelamin);
        $('[name="tlp"]').val(tlp);
        $('#ModalEditMember').modal('show');
    }
    // Modal Edit Member

    // Modal Hapus Member
    function ModalHapusMember($id) {
        $('[name="id_member"]').val($id);
        $('#ModalHapusMember').modal('show');
    }
</script>
