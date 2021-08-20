<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;
use App\Http\Requests\CreateMessageRequest;

class PageController extends Controller
{
    protected $request;
   
    public function home()
    {
        return view('home');
    }
    public function contactos()
    {
        return view('contactos');
    }
    public function saludos($nombre = "Invitado")
    {
        $html = "<h2>contenido html</h2>"; 
        $script = "<script>alert('problema xss')</script>";
        $consolas = [
           "Play Station 4",
           "Xbox One",
            "Wii U"
        ];
        return view('saludo', compact('nombre', 'html', 'script', 'consolas'));
    }

    public function mensajes(CreateMessageRequest $request)
    {
        $data = $request->all();
        /* if ($request->input('nombre') != null) {
           return "Si tiene nombre. es ". $request->input('nombre');
        } else {
            return "No tiene nombre";
        } */
        return back()->with('info', 'Tu mensaje se envio con exito :)');

        
        
    }
}
