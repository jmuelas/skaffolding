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
    $this->validate($request, [
      'nombre' => 'required',
      'email' => 'required|email',
      'mensaje' => 'required'
      ]);
    $nombre = filter_var($request->nombre, FILTER_SANITIZE_STRING);
    $email = filter_var($request->email, FILTER_SANITIZE_STRING);
    $mensaje = filter_var($request->mensaje, FILTER_SANITIZE_STRING);

    $contacto = new Contacto();
    $contacto->nombre = strip_tags($nombre);
    $contacto->email = strip_tags($email);
    $contacto->mensaje = strip_tags($mensaje);

    $sent = $contacto->save();

    return View('pages/contacto',
      [
        'response' => $sent,
        'nombre' => $contacto->email,
        'email' => $contacto->email,
        'mensaje' => $contacto->mensaje
      ]
    );


   }
}
