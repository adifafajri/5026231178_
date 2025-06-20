@extends('template')

@section('content')

    <h3>Tambah Data Karyawan</h3>
    <a href="/eas" class="btn btn-info"> Kembali</a>
    <br/>
    <br/>

    <form action="/eas/masukKaryawan" method="post">
        {{ csrf_field() }}

        <div class="row mb-3">
            <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="NIP" name="NIP" placeholder="Masukkan NIP" value="{{ old('NIP') }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="pangkat" class="col-sm-2 col-form-label">Pangkat</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="pangkat" name="pangkat" placeholder="Masukkan Pangkat" value="{{ old('pangkat') }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="gaji" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="gaji" name="gaji" placeholder="Masukkan Gaji ex : (5000000)" value="{{ old('gaji') }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
    </form>

    <script>
    @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            timer: 2000,
            showConfirmButton: false
        });
    @endif
    </script>


@endsection


