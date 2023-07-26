<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class sesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'Required',
            'password'=>'required'
        ],
        [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'password wajin diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
    
        if(Auth::attempt($infologin)){
            if (strtolower(Auth::user()->role) == 'admin'){
                return redirect('admin/Admin');
            }
            elseif (strtolower(Auth::user()->role) == 'mahasiswa'){
                return redirect('admin/mahasiswa');
            }
            elseif (strtolower(Auth::user()->role) == 'dosen'){
                return redirect('admin/dosen');
            }
        } else {
            return redirect('')->withErrors('Username dan password yang dimasukan tidak sesuai')->withInput();
        }
    }

        function logout()
        {
            Auth::logout();
            return redirect('');
        }
    }
