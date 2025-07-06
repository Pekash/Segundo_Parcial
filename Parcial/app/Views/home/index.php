<?php
$this->extend('layout/template');

$this->section('content');
?>

<div class="container mt-5">
    <!-- Jumbotron -->
    <div class="jumbotron text-center bg-light p-5 mb-5">
        <h1 class="display-4">Bienvenido a nuestro Catálogo</h1>
        <p class="lead">Descubre nuestra colección de moda y accesorios</p>
        <hr class="my-4">
        <p class="mb-4">Explora nuestras categorías principales:</p>
        <div class="row justify-content-center">
            <!-- Sección Zapatos -->
            <div class="col-md-6 mb-4">
                <div class="row g-3">
                    <div class="col-12">
                        <h3 class="text-center mb-3">Zapatos</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('Z1') ?>" class="btn btn-primary btn-lg w-100">Zapatos Deportivos</a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('Z2') ?>" class="btn btn-primary btn-lg w-100">Zapatos Casuales</a>
                    </div>
                </div>
            </div>

            <!-- Sección Vestidos -->
            <div class="col-md-6 mb-4">
                <div class="row g-3">
                    <div class="col-12">
                        <h3 class="text-center mb-3">Vestidos</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('V1') ?>" class="btn btn-success btn-lg w-100">Vestidos de Fiesta</a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('V2') ?>" class="btn btn-success btn-lg w-100">Vestidos Formales</a>
                    </div>
                </div>
            </div>

            <!-- Sección Carteras -->
            <div class="col-md-6 mb-4">
                <div class="row g-3">
                    <div class="col-12">
                        <h3 class="text-center mb-3">Carteras</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('C1') ?>" class="btn btn-warning btn-lg w-100">Carteras de Mano</a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('C2') ?>" class="btn btn-warning btn-lg w-100">Carteras de Hombro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Productos Destacados</h2>
        </div>
    </div>

    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/zapatos/deportivos1.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Producto Destacado 1</h5>
                    <p class="card-text">$120.00 USD</p>
                    <button class="btn btn-primary w-100">Ver más</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/zapatos/deportivos2.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Producto Destacado 2</h5>
                    <p class="card-text">$150.00 USD</p>
                    <button class="btn btn-primary w-100">Ver más</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/zapatos/deportivos3.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Producto Destacado 3</h5>
                    <p class="card-text">$110.00 USD</p>
                    <button class="btn btn-primary w-100">Ver más</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
