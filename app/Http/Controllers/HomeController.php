<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BukuModel;

class HomeController extends Controller
{
  public function index()
  {
      $datas = BukuModel::get();
      return view('welcome', compact('datas'));
  }
}
