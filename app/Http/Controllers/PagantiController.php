<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagantiController extends Controller
{
    function getPaganti() {

      $paganti = DB::table('paganti')
                        ->selectRaw('id, name, lastname')
                        ->get();

      return view('site.home', ['paganti' => $paganti]);
    }

    function getPaganteById($id) {


      $pagante = DB::table('paganti')
                      ->selectRaw('id, name, lastname')
                      ->where('id', '=', $id)
                      ->get();

      return view('site.pagante', ['pagante' => $pagante]);
    }
}
