<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function user(){
        $data =  User::all();
        
        return view('welcome', array('data' => $data));
    }
    function HomeController(){
        $judul = "Welcome";
        return view('welcome', compact('judul'));
    }
    
    function AboutController(){
        $data = [
            $name = "Muhammad SHamil Izzah",
            $no = "082189737925 ",
            $kelas = "TI-D"
        ];
        return view('about', compact($data));
    }
}
