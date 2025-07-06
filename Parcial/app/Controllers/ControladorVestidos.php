<?php

namespace App\Controllers;

class ControladorVestidos extends BaseController
{
    public function fiesta()
    {
        return view('ContenedorVestidos/Fiesta');
    }

    public function formal()
    {
        return view('ContenedorVestidos/Formal');
    }
}
