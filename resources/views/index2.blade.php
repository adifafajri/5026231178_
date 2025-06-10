@extends('template')

@section('content')

	<h3>Data TV</h3>

	<a href="/tv/tambahTV" class="btn btn-primary"> + Tambah TV Baru</a>

	<p>Cari Data TV :</p>
	<form action="/tv/cariTV" method="GET">
		<input type="text" class="form-control" name="cariTV" placeholder="Cari TV ...">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
    {{-- @if(session('sukses'))  --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($TV as $t)
		<tr>
			<td>{{ $t->merkTV }}</td>
			<td>{{ $t->hargaTV }}</td>
			<td>
                @if($t->tersedia == 1)
                    Ya
                @else
                    Tidak
                @endif
            </td>
			<td>{{ $t->berat }}</td>
			<td>
				<a href="/tv/editTV/{{ $t->TV_id }}" class="btn btn-success">Edit</a>
				|
				<a href="/tv/hapusTV/{{ $t->TV_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $TV->links() }}
    <br/>

@endsection
