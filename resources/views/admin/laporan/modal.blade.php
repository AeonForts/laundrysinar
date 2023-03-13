<!-- Form Modal Hapus Member-->

<!-- Form Modal Tambah Member -->
<form action="{{ route('store_member') }}" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahMember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

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
    function ModalTambahMember() {
        console.log(jenis);
        $('#ModalTambahMember').modal('show');
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
