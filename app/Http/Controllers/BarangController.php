<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
       $data = Barang::all();
       return view('Barang', ['data'=> $data]);
    }

    public function store(Request $request)
    {
      $data = new Barang;
      $data->name = $request->name;
      $data->save();

      return redirect('Barang');
    }

    public function delete($id)
    {
      $datas = Barang::find($id);
      $datas->delete();

      return redirect('Barang');
    }
  }
