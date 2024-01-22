<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    
    public function test()
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

        //Query Builder Update
        $affected = DB::table('makanans')->where('id',1)->update(['nama'=>'Mie Ayam']);

        return 'Masuk Test';
    }
}
