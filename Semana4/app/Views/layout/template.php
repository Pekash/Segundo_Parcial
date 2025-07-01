<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?? 'Catálogo de Ventas' ?> </title>
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('public/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/Semana4/" class="text-white">Catálogo de Ventas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownZapatos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Zapatos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://localhost/Semana4/Z1">Zapatos Deportivos</a></li>
                            <li><a class="dropdown-item" href="http://localhost/Semana4/Z2">Zapatos Casuales</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownVestidos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Vestidos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://localhost/Semana4/V1">Vestidos de Fiesta</a></li>
                            <li><a class="dropdown-item" href="http://localhost/Semana4/V2">Vestidos Formales</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCarteras" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Carteras
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://localhost/Semana4/C1">Carteras de Mano</a></li>
                            <li><a class="dropdown-item" href="http://localhost/Semana4/C2">Carteras de Hombro</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; <?= date('Y') ?> Catálogo de Ventas. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('public/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
