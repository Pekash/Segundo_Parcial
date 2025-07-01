<?php
$this->extend('layout/template');

$this->section('content');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Vestidos Formales</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/vestidos/formal1.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Vestido Formal Zara</h5>
                    <p class="card-text">$150.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/vestidos/formal2.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Vestido Formal Michael Kors</h5>
                    <p class="card-text">$180.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/vestidos/formal3.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Vestido Formal Hugo Boss</h5>
                    <p class="card-text">$210.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
