@extends('template')

@section('content')


<head>
	<title></title>
</head>
<body>

	<h3>Edit TV</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan as $k)
	<form action="/karyawan/updateKaryawan" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->kodepegawai }}"> <br/>
		{{-- Kode Pegawai: <input type="text" required="required" name="kodepegawai" value="{{ $k->kodepegawai }}"> <br/> --}}
        Nama Lengkap: <input type="text" required="required" name="namalengkap" value="{{ $k->namalengkap }}"> <br/>
        Divisi: <input type="text" required="required" name="divisi" value="{{ $k->divisi }}"> <br/>
        Departemen: <input type="text" required="required" name="departemen" value="{{ $k->departemen }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
@endsection
