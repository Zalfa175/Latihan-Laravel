<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function test($id = 0)
    {
        $nama = 'Nabila Zalfa Anandita';

        return view('test', ['nama' => $nama, 'id' => $id]);
    }
}
