<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contacto;
class ContactoController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactoByEmail(Request $request)
   {
     $contacto = $request->all();
    // dd($contacto);
//      $this->validate($request, [
//        'nombre' => 'required',
//        'email' => 'required|email',
//        'mensaje' => 'required'
//        ]);//
//      Contacto::create($request->all());
      
      return View('pages/contacto',
              [
                  'nombre' => $contacto['nombre'],
                  'email' => $contacto['email'],
                  'mensaje' => $contacto['mensaje']
              ] 
            );
   }
}