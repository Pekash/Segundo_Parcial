<?php
$this->extend('layout/template');

$this->section('content');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Zapatos Deportivos</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
            <img src="<?= base_url('public/imagenes/zapatos/deportivos1.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
            <div class="card-body">
                    <h5 class="card-title">Zapato Deportivo Nike Air Max</h5>
                    <p class="card-text">$120.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/zapatos/deportivos2.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Zapato Deportivo Adidas Ultra Boost</h5>
                    <p class="card-text">$150.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/zapatos/deportivos3.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Zapato Deportivo Puma Future</h5>
                    <p class="card-text">$110.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>