<?php
$this->extend('layout/template');

$this->section('content');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Carteras de Mano</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/carteras/mano1.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Cartera de Mano Louis Vuitton</h5>
                    <p class="card-text">$600.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/carteras/mano2.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Cartera de Mano Gucci</h5>
                    <p class="card-text">$700.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/carteras/mano3.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Cartera de Mano Chanel</h5>
                    <p class="card-text">$800.00 USD</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
