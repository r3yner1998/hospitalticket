<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjemploController extends Controller
{

   public function index()
   {
      $listado = DB::table('departamentos')->get();

      return view('content.ejemplo.view', ['data' => $listado]);
   }

   public function nuevo()
   {
      return view('content.ejemplo.nuevo');
   }

   public function registrar(Request $request)
   {
      $email = $request->input('email');

      if (empty($email)) {
         return back()->withErrors(['msg' => 'Email vacío']);
      }

      DB::table('departamentos')->insert(['descripcion' => $email]);

      return redirect()->route('ejemplo-view');
   }
}
