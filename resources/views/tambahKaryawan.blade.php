@extends('template')

@section('content')

    <h3>Tambah Data Karyawan</h3>
    <a href="/karyawan" class="btn btn-info"> Kembali</a>
    <br/>
    <br/>

    @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{ session('error') }}
        </div>
    @endif

    <form action="/karyawan/storeKaryawan" method="post">
        {{ csrf_field() }}

        {{-- (Isi form Anda tidak berubah) --}}
        <div class="row mb-3">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" placeholder="Masukkan Kode Pegawai" value="{{ old('kodepegawai') }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap" value="{{ old('namalengkap') }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Masukkan Divisi" value="{{ old('divisi') }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Masukkan Departemen" value="{{ old('departemen') }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection


