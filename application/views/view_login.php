<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Klinik Sehat Sejahtera">
    <meta name="generator" content="Kelompok 1">
    <title>Login Klinik Sehat Sejahtera</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url(); ?>assets/clinic-icon.png">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/custom/login.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" method="POST" action="<?= base_url("auth/login_aksi"); ?>">
        <img class="mb-4" src="<?= base_url(); ?>assets/clinic-svg.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
        <div class="alert-danger">
            <?= validation_errors(); ?>
        </div>
        <label for="Username" class="sr-only">Email address</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" autofocus>
        <label for="Password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021 - Kelompok 1</p>
    </form>
</body>

</html>