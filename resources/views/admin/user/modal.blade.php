

<!-- Form Modal Tambah User -->
<form action="{{route ('store_user')}}" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label class="form-label">username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">password</label>
                        <input type="text" name="password" class="form-control" required>
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
                        <label class="form-label">Role</label>
                        <select class="form-control" name="role" id='role' required>
                            <option value="">Pilih Role</option>
                            <option value="kasir">Kasir</option>
                            <option value="owner">Owner</option>
                        </select>
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




<form action="{{ route('update_user') }}" method="post">
    @csrf
    <div class="modal fade" id="ModalEditUser" tabindex="-1" aria-labelledby="ModalEditUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <input type="hidden" class="form-control" name="id_user" id="id_user" required>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">username</label>
                        <input type="text" name="username" class="form-control" required>
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
                        <label class="form-label">Role</label>
                        <select class="form-control" name="role" id='role' required>
                            <option value="">Pilih Role</option>
                            <option value="kasir">Kasir</option>
                            <option value="owner">Owner</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">password</label>
                        <input type="text" name="password" class="form-control" required>
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
    // Modal Tambah User
    function ModalTambahUser() {
        console.log(jenis);
        $('#ModalTambahUser').modal('show');
    }
    // Modal Tambah User

    // Modal Edit User
    function ModalEditUser(id_user,nama,username,id_outlet,role,password) {
        // console.log(nama_paket);
        // console.log(nama_paket);
        $('[name="id_user"]').val(id_user);
        $('[name="nama"]').val(nama);
        $('[name="username"]').val(username);
        $('[name="id_outlet"]').val(id_outlet);
        $('[name="role"]').val(role);
        $('[name="password"]').val(password);
        $('#ModalEditUser').modal('show');
    }
    // Modal Edit User

    // Modal Hapus Member
    function ModalHapusMember($id) {
        $('[name="id_member"]').val($id);
        $('#ModalHapusMember').modal('show');
    }
</script>
