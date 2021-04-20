<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL.RS ?>css/styles.css">
    <title>Sistema de ventas</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <img src="<?php echo URL.RS ?>images/icons/logo.png" alt="" class="mx-auto w-25 imglogo">
                Ventas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-sm-inline-flex flex-sm-row-reverse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="#" title="Manage">Manage</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-dark" href="#" title="Logout">Logout</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-dark" href="<?php echo URL?>User/Register" title="Register">Register</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-dark" href="#" title="Login">Login</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                        <a class="nav-link text-dark" href="#" title="Home">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-dark" href="#" title="Users">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>
    