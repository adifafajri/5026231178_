<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get(); //array all record
		$pegawai = DB::table('pegawai')->paginate(10); //paginate 10 record per page
        // $pegawai = DB::table('pegawai')->orderBy('pegawai_id', 'desc')->get(); //mengurutkan data berdasarkan id pegawai secara descending

        // echo $pegawai; // untuk melihat data pegawai
        // dd($pegawai); // untuk melihat data pegawai dalam format yang lebih mudah dibaca

    	// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');

	}

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'jabatan' => 'required',
           'umur' => 'required|numeric',
           'alamat' => 'required'
        ]);

        return view('proses',['data' => $request]);
    }

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')
            ->where('pegawai_id',$id)
            ->get();

		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['pegawai' => $pegawai]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pegawai')->where('pegawai_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);
    }


//========================================================================


        //CRUD UAS : Karyawan
    public function index3()
    {
            $karyawan = DB::table('karyawan')->paginate(10);
            return view('index3',['karyawan' => $karyawan]);

    }


	public function tambahKaryawan()
	{

		// memanggil view tambah
		return view('tambahkaryawan');

	}


	public function storeKaryawan(Request $request)
	{

		 	DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);

		return redirect('/karyawan');
    }

	public function editKaryawan($id)
	{

		$karyawan = DB::table('karyawan')
            ->where('kodepegawai',$id)
            ->get();


		return view('editKaryawan',['karyawan' => $karyawan]);

	}


	public function updateKaryawan(Request $request)
	{

		DB::table('karyawan')->where('kodepegawai',$request->id)->update([
			'namalengkap' => $request->namalengkap,
			'departemen' => $request->departemen,
			'divisi' => $request->divisi,
		]);

		return redirect('/karyawan');
	}


	public function hapusKaryawan($ID)
	{

		DB::table('karyawan')->where('kodepegawai',$ID)->delete();


		return redirect('/karyawan');
	}

    public function cariKaryawan(Request $request)
	{

		$cariKaryawan = $request->cariKaryawan;


		$karyawan = DB::table('karyawan')
		->where('namalengkap','like',"%".$cariKaryawan."%")
		->paginate();


		return view('index3',['karyawan' => $karyawan]);

	}

    //========================================================================

    //CRUD : TV
    public function index2()
    {
            $TV = DB::table('TV')->paginate(10);
            return view('index2',['TV' => $TV]);

    }


	public function tambahTV()
	{

		// memanggil view tambah
		return view('tambahTV');

	}


	public function storeTV(Request $request)
	{

		DB::table('TV')->insert([
			'merkTV' => $request->merkTV,
			'hargaTV' => $request->hargaTV,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);

		return redirect('/tv');

	}


	public function editTV($id)
	{

		$TV = DB::table('TV')
            ->where('TV_id',$id)
            ->get();


		return view('editTV',['TV' => $TV]);

	}


	public function updateTV(Request $request)
	{

		DB::table('TV')->where('TV_id',$request->id)->update([
			'merkTV' => $request->merkTV,
			'hargaTV' => $request->hargaTV,
			'tersedia' => $request->tersedia,
            'berat' => $request->berat
		]);

		return redirect('/TV');
	}


	public function hapusTV($ID)
	{

		DB::table('TV')->where('tv_id',$ID)->delete();


		return redirect('/tv');
	}

    public function cariTV(Request $request)
	{

		$cariTV = $request->cariTV;


		$TV = DB::table('TV')
		->where('merkTV','like',"%".$cariTV."%")
		->paginate();


		return view('index2',['TV' => $TV]);

	}
    //========================================================================

        public function index4()
	{
		$keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);
		return view('index4',['keranjangbelanja' => $keranjangbelanja]);

	}

	public function tambahBarang()
	{

		return view('tambahBarang');

	}

	public function storeBarang(Request $request)
	{
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->ID,
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		return redirect('/keranjangbelanja');
	}

	public function editBarang($ID)
	{
		$barang = DB::table('keranjangbelanja')
            ->where('ID', $ID)
            ->get();

		return view('editBarang',['barang' => $barang]);

	}

	public function updateBarang(Request $request)
	{
		DB::table('keranjangbelanja')->where('ID',$request->ID)->update([
			'KodeBarang' => $request->kodebarang,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		return redirect('/keranjangbelanja');
	}

	public function hapusBarang($ID)
	{
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		return redirect('/keranjangbelanja');
	}

    public function cariBarang(Request $request)
	{
		$cariBarang = $request->cariBarang;
		$barang = DB::table('keranjangbelanja')
		->where('KodeBarang','like',"%".$cariBarang."%")
		->paginate();

		return view('d4/index',['keranjangbelanja' => $keranjangbelanja]);

	}

    //========================================================================

    public function index5()
    {
        $counter = DB::table('pagecounter')->where('ID', 1)->first();
        $jumlahpengunjung = 0;
        if ($counter) {
            $newjumlah = $counter->Jumlah + 1;
            DB::table('pagecounter')->where('ID', 1)->update(['Jumlah' => $newjumlah]);
        }

        $jumlahpengunjung = $newjumlah;
        return view('index5', ['jumlahpengunjung' => $jumlahpengunjung]);
    }

}

