@extends('template')

@section('content')

	<h3>Data Karyawan</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

	<br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>NIP</th>
			<th>Nama </th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th></th>
		</tr>
		@foreach($newkaryawan as $nk)
		<tr>
			<td>{{ $nk->NIP }}</td>
			<td>{{ strtoupper($nk->nama) }}</td>
			<td>{{ $nk->pangkat }}</td>
            <td>{{ 'Rp ' . number_format($nk->gaji, 0, ',', '.') }}</td>
			<td>
				<a href="/eas/deleteKaryawan/{{ $nk->NIP }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <div class="row mt-3">
    <div class="col-md-6">
        <a href="/eas/addKaryawan" class="btn btn-primary"> + Tambah Karyawan</a>
    </div>

    <div class="col-md-6 d-flex justify-content-end">
        {{ $newkaryawan->links() }}
    </div>
</div>
<br/>

@endsection
