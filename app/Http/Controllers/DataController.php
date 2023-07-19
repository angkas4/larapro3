<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;




class DataController extends Controller
{
    public function index()
    {
        //get posts
        //$data = Data::all();

        //render view with posts
        //return view('table', compact('data'));
        $data = DB::table('data')->get();
        $count = 1;
    	// mengirim data pegawai ke view index
    	return view('table',['data' => $data ,'count' => $count]);
    }
    public function dash()
    {
        //get posts
        //$data = Data::all();

        //render view with posts
        //return view('table', compact('data'));
        $data = DB::table('data')->count();
       
    	// mengirim data pegawai ke view index
    	return view('dashboard',['data' => $data]);
    }
}
