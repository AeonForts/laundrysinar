<!-- Form Modal Hapus Outlet-->

<!-- Form Modal Tambah Outlet -->
<form action="{{ route('store_paket') }}" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahPaket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                        <label class="form-label">Jenis Paket</label>
                        <select class="form-control" name="jenis" id='jenis' required>
                            <option value="">Pilih Jenis Paket</option>
                            <option value="kiloan">Kiloan</option>
                            <option value="selimut">Selimut</option>
                            <option value="bed_cover">Bed Cover</option>
                            <option value="kaos">Kaos</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" required>
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




<form action="{{ route('update_paket') }}" method="post">
    @csrf
    <div class="modal fade" id="ModalEditPaket" tabindex="-1" aria-labelledby="ModalEditPaketLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <input type="hidden" class="form-control" name="id_paket" id="id_paket" required>
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
                        <label class="form-label">Jenis Paket</label>
                        <select class="form-control" name="jenis" id='jenis' required>
                            <option value="">Pilih Jenis Paket</option>
                            <option value="kiloan">Kiloan</option>
                            <option value="selimut">Selimut</option>
                            <option value="bed_cover">Bed Cover</option>
                            <option value="kaos">Kaos</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Paket</label>
                        <input type="text" name="nama_paket" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="number" name="harga" class="form-control" required>
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

<!-- Form Modal Hapus Outlet-->
<form action="{{route('delete_paket')}}" method="post">
    @csrf
<div class="modal fade" id="ModalHapusPaket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
          <div class="modal-footer">
              <input type="hidden" name="id_paket">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
          </div>
      </div>
    </div>
  </div>
</form>





<!-- Form Modal Edit Outlet -->


<!-- Form Modal Hapus Outlet-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
<script>
    // Modal Tambah Outlet
    function ModalTambahPaket() {
        console.log(jenis);
        $('#ModalTambahPaket').modal('show');
    }
    // Modal Tambah Outlet

    // Modal Edit Outlet
    function ModalEditPaket(id_paket, id_outlet, jenis, nama_paket, harga) {
        console.log(nama_paket);
        console.log(nama_paket);
        $('[name="id_paket"]').val(id_paket);
        $('[name="id_outlet"]').val(id_outlet);
        $('[name="jenis"]').val(jenis);
        $('[name="nama_paket"]').val(nama_paket);
        $('[name="harga"]').val(harga);
        $('#ModalEditPaket').modal('show');
    }
    // Modal Edit Outlet

    // Modal Hapus Outlet
    function ModalHapusPaket($id) {
        $('[name="id_paket"]').val($id);
        $('#ModalHapusPaket').modal('show');
    }
</script>
