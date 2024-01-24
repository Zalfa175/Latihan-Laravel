<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Makanan;
use App\Models\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        return view('home1');
    }
    
    public function about1()
    {
        return view('about1');
    }

    public function tambah()
    {
        return view('input');
    }
    
    public function simpan(Request $request)
    {
        $nama = $request->input('nama');
        $kategori = $request->input('kategori');
        $harga = $request->input('harga');
        $ket = $request->input('ket');

        return view('result', [
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'ket' => $ket,
        ]);
    }
    
    public function view_makanan()
    {
        $makanan = Makanan::all();

        return view('makanan', [
            'foods' => $makanan,
        ]);
    }

    public function test_query_builder()
    {
        //Query Builder insert 1 data
        // DB::table('makanans')->insert([
        //     'nama' => 'Nasi Goreng',
        //     'kategori' => 'Main Course',
        //     'harga' => 10000,
        //     'ket' => 'tersedia',
        // ]);

        // //Query Builder insert banyak data
        // DB::table('makanans')->insert([
        //     [
        //     'nama' => 'Nasi Bakar',
        //     'kategori' => 'Main Course',
        //     'harga' => 15000,
        //     'ket' => 'tersedia',
        //     ],
        //     [
        //     'nama' => 'Mie Goreng',
        //     'kategori' => 'Main Course',
        //     'harga' => 10000,
        //     'ket' => 'tersedia',
        //     ],
        //     [
        //     'nama' => 'Ayam Goreng',
        //     'kategori' => 'Main Course',
        //     'harga' => 20000,
        //     'ket' => 'tersedia',
        //     ],
        //     [
        //     'nama' => 'Ayam Bakar',
        //     'kategori' => 'Main Course',
        //     'harga' => 20000,
        //     'ket' => 'tersedia',
        //     ],
        // ]);

        // //Query Builder Select
        // $result = DB::table('makanans')->get();
        // dd($result);

        // //Query Builder Delete
        // DB::table('makanans')->where('id', 3)->delete();

        // //Query Builder Update
        // $affected = DB::table('makanans')->where('id',1)->update(['nama'=>'Mie Ayam']);

        return 'Masuk Test';
    }

    public function test_eloquent()
    {
        //Insert Cara 1
        // Makanan::create([
        //     'kode_makanan' => '1',
        //     'nama' => 'Nasi Bakar',
        //     'kategori' => 'Main Course',
        //     'harga' => 15000,
        //     'ket' => 'tersedia',
        // ]);

        //Insert Cara 2
        // $makanan = new Makanan;
        // $makanan->kode_makanan = '2';
        // $makanan->nama = 'Nasi Goreng';
        // $makanan->kategori = 'Main Course';
        // $makanan->harga = 50000;
        // $makanan->ket = 'sold out';
        // $makanan->save();

        //Select 
        // $makanan = Makanan::all();
        // dd($makanan);

        //Delete Cara 1
        // Makanan::find('2')->delete();

        // //Delete Cara 2
        // $makanan = Makanan::where('kode_makanan', 2);
        // $makanan->delete();

        //Update
        $makanan = Makanan::find('1');
        $makanan->nama = 'Martabak';
        $makanan->kategori = 'Snack';
        $makanan->harga = 100000;
        $makanan->ket = 'Muanis';
        $makanan->save();

        return 'Masuk Test';
    }
}