<!-- Form Modal Hapus Outlet-->

<!-- Form Modal Tambah Outlet -->
<form action="{{route('store_outlet')}}" method="post">
    @csrf
<div class="modal fade" id="ModalTambahOutlet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Tambah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <div class="mb-3">
                <label  class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nomor Telephon</label>
                <input type="number" name="tlp" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
        </div>
        </div>
    </div>
</div>
</form>

<!-- Form Modal Edit Outlet -->
<form action="{{route('update_outlet')}}" method="post">
    @csrf
<div class="modal fade" id="ModalEditOutlet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" >Form Ubah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

                <input type="hidden" class="form-control" name="id_outlet" required>
            <div class="mb-3">
                <label  class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label  class="form-label">Nomor Telephon</label>
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
<!-- Form Modal Edit Outlet -->


<!-- Form Modal Hapus Outlet-->
<form action="{{route('delete_outlet')}}" method="post">
    @csrf
<div class="modal fade" id="ModalHapusOutlet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="id_outlet">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
      </div>
    </div>
  </div>
</form>
  <!-- Form Modal Hapus Outlet-->
<script
			  src="https://code.jquery.com/jquery-3.6.3.js"
			  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
			  crossorigin="anonymous"></script>
<script>

    // Modal Tambah Outlet
    function ModalTambahOutlet () {
           $('#ModalTambahOutlet').modal('show');
       }
    // Modal Tambah Outlet

    // Modal Edit Outlet
     function ModalEditOutlet (id,nama,alamat,tlp) {
            console.log(nama);
            $('[name="id_outlet"]').val(id);
            $('[name="nama"]').val(nama);
            $('[name="alamat"]').val(alamat);
            $('[name="tlp"]').val(tlp);
           $('#ModalEditOutlet').modal('show');
       }
    // Modal Edit Outlet

     // Modal Hapus Outlet
     function ModalHapusOutlet ($id) {
            $('[name="id_outlet"]').val($id);
           $('#ModalHapusOutlet').modal('show');
       }

   </script>


