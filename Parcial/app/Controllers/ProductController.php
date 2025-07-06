<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    public function show($category, $id)
    {
        $category = strtolower($category);

        switch ($category) {
            case 'zapatos':
                $controller = new \App\Controllers\ControladorZapatos();
                if ($id == 1) {
                    return $controller->index(); // Deportivos
                } elseif ($id == 2) {
                    return $controller->casual();
                }
                break;
            case 'vestidos':
                $controller = new \App\Controllers\ControladorVestidos();
                if ($id == 1) {
                    return $controller->fiesta();
                } elseif ($id == 2) {
                    return $controller->formal();
                }
                break;
            case 'carteras':
                $controller = new \App\Controllers\ControladorCarteras();
                if ($id == 1) {
                    return $controller->mano();
                } elseif ($id == 2) {
                    return $controller->hombro();
                }
                break;
            default:
                // Si la categoría no es válida, muestra un error 404
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Si el ID no es válido para la categoría, muestra un error 404
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
