@extends('template')

@section('content')

	<h3>Data TV</h3>

	<a href="/tv" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/tv/storeTV" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="merkTV">
                Merk TV
            </label>
            <div class="col-sm-6" style="margin-bottom: 18px;">
                <input class="form-control"
                    type="text"
                    id="merkTV"
                    placeholder="Masukkan Merk TV"
                    name="merkTV" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="hargaTV">
                Harga TV
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="number"
                    id="hargaTV"
                    placeholder="Masukkan Harga TV (contoh: 3500000)"
                    name="hargaTV" required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="tersedia">
                Tersedia
            </label>
            <div class="col-sm-6">
                <label class="radio-inline">
                    <input type="radio" name="tersedia" value="1" checked> Ya
                </label>
                <label class="radio-inline">
                    <input type="radio" name="tersedia" value="0"> Tidak
                </label>
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="berat">
                Berat (kg)
            </label>
            <div class="col-sm-6">
                <input class="form-control"
                    type="text" id="berat"
                    placeholder="Masukkan Berat TV dalam kg (contoh: 4.5)"
                    name="berat" required="required">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
