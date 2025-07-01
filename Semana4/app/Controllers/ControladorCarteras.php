<?php

namespace App\Controllers;

class ControladorCarteras extends BaseController
{
    public function mano()
    {
        return view('ContenedorCarteras/Mano');
    }

    public function hombro()
    {
        return view('ContenedorCarteras/Hombro');
    }
}
