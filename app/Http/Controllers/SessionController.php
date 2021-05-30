<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('name')) {
            echo 'Tiene sesión con valor ' . $request->session()->get('name') . ' ...';
        } else {
            echo 'No tiene sesión ...';
        }
    }

    public function store(Request $request)
    {
        $state = $request->session()->put('name', 'Daniela');
        echo 'Sesión creada con éxito ...' . $state;
    }

    public function delete (Request $request)
    {
        $request->session()->forget('name');
        echo 'Session eliminada con éxito';
    }
}
