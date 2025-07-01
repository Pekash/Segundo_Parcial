<?php
$this->extend('layout/template');

$this->section('content');
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Zapatos Casuales</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/zapatos/casual1.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Zapatos Casuales XYZ</h5>
                    <p class="card-text">$120.000 COP</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/zapatos/casual2.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Zapatos Casuales ABC</h5>
                    <p class="card-text">$140.000 COP</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="<?= base_url('public/imagenes/zapatos/casual3.jpg') ?>" alt="Zapato Deportivo" style="width:300px;">
                <div class="card-body">
                    <h5 class="card-title">Zapatos Casuales LMN</h5>
                    <p class="card-text">$160.000 COP</p>
                    <button class="btn btn-primary w-100">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
