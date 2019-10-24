<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
       $data = User::all();
       return view('User', ['data'=> $data]);
    }

    public function store(Request $request)
    {
      $data = new User;
      $data->name = $request->name;
      $data->email= $request->email;
      $data->password = $request->password;
      $data->save();

      return redirect('User');
    }

    public function delete($id)
    {
      $datas = User::find($id);
      $datas->delete();

      return redirect('User');
    }
}
