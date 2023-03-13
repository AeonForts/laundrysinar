@extends('layouts.app')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    @foreach ($outlet as $Get)
                    <form action="/admin/outlet/update/{{$Get->id_outlet}}" method="POST">

                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <label class="font-weight-bold">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $Get->nama }}" placeholder="">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $Get->alamat }}" placeholder="">

                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Telephon</label>
                            <input type="text" class="form-control" name="tlp" value="{{ $Get->tlp }}" placeholder="">

                        </div>


                        <input type="submit" value="Simpan Data">
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
