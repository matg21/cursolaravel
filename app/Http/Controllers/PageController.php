<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
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
}
