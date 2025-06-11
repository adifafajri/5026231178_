@extends('template')

@section('content')


<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit TV</h3>

	<a href="/tv"> Kembali</a>

	<br/>
	<br/>

	@foreach($TV as $t)
	<form action="/tv/updateTV" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->TV_id }}"> <br/>
		Nama TV: <input type="text" required="required" name="merkTV" value="{{ $t->merkTV }}"> <br/>
        Harga TV: <input type="number" required="required" name="hargaTV" value="{{ $t->hargaTV }}"> <br/>
        Tersedia:
        <input type="radio" name="tersedia" value="1" {{ $t->tersedia ? 'checked' : '' }}> Ya
        <input type="radio" name="tersedia" value="0" {{ !$t->tersedia ? 'checked' : '' }}> Tidak <br/>
        Berat (kg): <input type="text" required="required" name="berat" value="{{ $t->berat }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
@endsection
