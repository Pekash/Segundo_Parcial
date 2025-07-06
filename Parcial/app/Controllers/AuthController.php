<?php

namespace App\Controllers;

class AuthController extends BaseController
{
    public function index()
    {
        // Muestra el formulario de login y pasa cualquier mensaje de error
        return view('login', ['error' => session()->getFlashdata('error')]);
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Credenciales hardcodeadas
        if ($username === 'dw' && $password === '1234') {
            // Si son correctas, redirige a la página de inicio
            return redirect()->to(site_url('home'));
        } else {
            // Si son incorrectas, vuelve al login con un mensaje de error
            return redirect()->back()->with('error', 'Credenciales erróneas. Inténtalo de nuevo.');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('/'));
    }
}
