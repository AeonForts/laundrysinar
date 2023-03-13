@include('_partials.head')
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">Laundry Berkah</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">Halaman Utama</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/pesan">Pesan</a></li>
                <li class="nav-item"><a class="nav-link" href="auth/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="" method="post">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label class="font-weight-bold">Paket</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('') }}" placeholder="">

                                        <!-- error message untuk title -->
                                        @error('nama')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Jenis pakaian</label>
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('') }}" placeholder="">

                                        <!-- error message untuk title -->
                                        @error('alamat')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label class="font-weight-bold">Pilih Outlet Terdekat</label>
                                        <input type="number" class="form-control @error('tlp') is-invalid @enderror" name="tlp" value="{{ old('') }}" placeholder="">

                                        <!-- error message untuk title -->
                                        @error('tlp')
                                            <div class="alert alert-danger mt-2">

                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Harga</label>
                                        <input type="number" class="form-control @error('tlp') is-invalid @enderror" name="tlp" value="{{ old('') }}" placeholder="">

                                        <!-- error message untuk title -->
                                        @error('tlp')
                                            <div class="alert alert-danger mt-2">

                                            </div>
                                        @enderror
                                    </div>


                                    <input type="submit" value="Simpan Data">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
