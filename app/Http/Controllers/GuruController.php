<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;
use App\Models\MapelModel;

class GuruController extends Controller
{
    //public function profile($id)
    //{
        //$guru = GuruModel::find($id);
        //return view('guru/profile',['guru' => $guru]);
    //}

    public function profile($id)
    {
        $guru = GuruModel::where('id', $id)->first();
        $mapel = MapelModel::get();
       
        return view('guru/profile',compact('guru', 'mapel'));
    }
}
