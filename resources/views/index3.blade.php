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
            <th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th></th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->kodepegawai }}</td>
			<td>{{ strtoupper($k->namalengkap) }}</td>
			<td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
			<td>
				<a href="/karyawan/editKaryawan/{{ $k->kodepegawai }}" class="btn btn-success">Edit</a>
				|
				<a href="/karyawan/hapusKaryawan/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <div class="row mt-3">
    <div class="col-md-6">
        <a href="/karyawan/tambahKaryawan" class="btn btn-primary"> + Tambah Karyawan</a>
    </div>

    <div class="col-md-6 d-flex justify-content-end">
        {{ $karyawan->links() }}
    </div>
</div>
<br/>

<script>
    // Cek jika ada session 'success' dari Controller
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            timer: 2000, // Pop-up hilang setelah 2 detik
            showConfirmButton: false
        });
    @endif
</script>


@endsection
