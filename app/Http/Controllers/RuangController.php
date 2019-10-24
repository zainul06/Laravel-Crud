<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruang;

class RuangController extends Controller
{
    public function index()
    {
       $data = Ruang::all();
       return view('Ruang', ['data'=> $data]);
    }

    public function store(Request $request)
    {
      $data = new Ruang;
      $data->name = $request->name;
      $data->type = $request->type;
      $data->save();
      return redirect('Ruang');
    }

    public function delete($id)
    {
      $datas = Ruang::find($id);
      $datas->delete();
      return redirect('Ruang');
    }
  }
