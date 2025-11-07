<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function tambahData()
    {
        DB::table('users')->insert([
            'name' => 'Dwi Rama',
            'email' => 'dwirama@example.com',
            'password' => bcrypt('12345678'),
        ]);

        return "Data berhasil ditambahkan ke tabel users!";
    }
}
