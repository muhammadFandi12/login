<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('ADMIN');
    }
    function admin()
    {
        return view('ADMIN');
    }
    function mahasiswa()
    {
        return view('ADMIN');
    }
    function dosen()
    {
        return view('ADMIN');
    }
}
