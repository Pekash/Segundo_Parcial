<?php
$this->extend('layout/template');

$this->section('content');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Vestidos de Fiesta</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/vestidos/fiesta1.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Vestido de Fiesta Versace</h5>
                    <p class="card-text">$300.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/vestidos/fiesta2.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Vestido de Fiesta Valentino</h5>
                    <p class="card-text">$350.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/vestidos/fiesta3.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Vestido de Fiesta Dior</h5>
                    <p class="card-text">$400.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
