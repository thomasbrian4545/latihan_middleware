<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('coba')->only('daftarMahasiswa');
    }

    public function daftarMahasiswa()
    {
        return 'Form pendaftaran mahasiswa';
    }
    public function tabelMahasiswa()
    {
        return 'Tabel data mahasiswa';
    }
    public function blogMahasiswa()
    {
        return 'Halaman blog mahasiswa';
    }
}
