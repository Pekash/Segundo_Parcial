<?php

namespace App\Controllers;

class ControladorZapatos extends BaseController
{
    public function index()
    {
        return view('ContenedorZapatos/Deportivos');
    }

    public function casual()
    {
        return view('ContenedorZapatos/Casual');
    }
}
