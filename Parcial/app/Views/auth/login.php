<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('public/login/css/style.css') ?>">

</head>
<body class="img js-fullheight" style="background-image: url(<?= base_url('public/login/images/bg.jpg') ?>);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Bienvenido al Catálogo</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Inicia sesión para continuar</h3>

                    <?php if(session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= site_url('login/auth') ?>" method="post" class="signin-form">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Usuario" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" name="password" type="password" class="form-control" placeholder="Contraseña" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?= base_url('public/login/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('public/login/js/popper.js') ?>"></script>
<script src="<?= base_url('public/login/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('public/login/js/main.js') ?>"></script>

</body>
</html>
