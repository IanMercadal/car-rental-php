<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cars</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/ico" href="<?= base_url ?>assets/img/logo.svg">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/estilos.css">
</head>

<body>
    <header class="header">
        <nav class="navigation">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#21304D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="7" cy="17" r="2" />
                    <circle cx="17" cy="17" r="2" />
                    <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                </svg>
                <p id="logo-text"><b>Mobility</b></p>
            </div>
            <div class="pages">
                <a class="page" href="<?php base_url ?>/">Home</a>
                <a class="page" <?php if ($_SERVER['REQUEST_URI'] !== "/") {  ?> href="<?php echo base_url ?>#services" <?php } ?> href="<?php base_url ?>#services">Services</a>
                <a class="page" <?php if ($_SERVER['REQUEST_URI'] !== "/") {  ?> href="<?php echo base_url ?>#list" <?php } ?> href="<?php base_url ?>#list">Cars</a>
                <a class="page" <?php if ($_SERVER['REQUEST_URI'] !== "/") {  ?> href="<?php echo base_url ?>#testimonials" <?php } ?> href="<?php base_url ?>#testimonials">Testimonials</a>
                <a class="page" <?php if ($_SERVER['REQUEST_URI'] !== "/") {  ?> href="<?php echo base_url ?>#contact" <?php } ?> href="<?php base_url ?>#contact">Contact</a>
            </div>

            <div class="option">
                <?php if(!isset($_SESSION["identity"])) : ?>
                    <a class="btn btn-primary" href="<?php base_url ?>/user/register">Register</a>
                    <a class="btn btn-primary" href="<?php base_url ?>/user/login">Login</a>
                <?php else : ?>
                    <a href="<?php echo base_url?>user/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#21304D" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M17 9l4 4m0 -4l-4 4" />
                        </svg>
                    </a>
                    <a class="btn btn-primary" href="<?php echo base_url?>user/index"><?php echo $_SESSION["identity"]->name ?></a>
                <?php endif; ?>
            </div>
        </nav>

        <!-- BANNER -->
        <?php if ($_SERVER['REQUEST_URI'] == "/") : ?>
            <div class="banner-bg">
                <div class="banner-img">
            </div>
                <!--  <div class="contenedor">
                    <div class="banner-inicio">
                        <div class="banner">
                            <div class="banner-text">
                                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nulla enim, ab numquam, doloremque </h1>
                                <p>Debitis dicta eaque perferendis dolorum, blanditiis voluptates? Mollitia inventore dolores libero illo, dicta aliquid nobis illum?</p>
                                <div class="buttons">
                                    <a href="#list" class="btn btn-secondary">Buy Cars</a>
                                    <a href="#list" class="btn btn-secondary">Rent Cars</a>
                                </div>
                            </div>
                            <div class="banner-img"></div>
                        </div>
                        <div class="options-example">
                            <div class="option-example">
                                <div class="option-example-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </div>

                                <div class="option-example-text">
                                    <p>Search Brand</p>
                                    <p><b>BMW</b></p>
                                </div>
                            </div>
                            <div class="option-example">
                                <div class="option-example-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="12" cy="11" r="3" />
                                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                    </svg>
                                </div>

                                <div class="option-example-text">
                                    <p>Location</p>
                                    <p><b>Spain</b></p>
                                </div>
                            </div>
                            <div class="option-example">
                                <div class="option-example-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                                    </svg>
                                </div>

                                <div class="option-example-text">
                                    <p>Price Range (Buy)</p>
                                    <p><b>18k - 120k</b></p>
                                </div>
                            </div>
                            <div class="option-example">
                                <div class="option-example-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cash-banknote" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="12" cy="12" r="3" />
                                        <rect x="3" y="6" width="18" height="12" rx="2" />
                                        <line x1="18" y1="12" x2="18.01" y2="12" />
                                        <line x1="6" y1="12" x2="6.01" y2="12" />
                                    </svg>
                                </div>

                                <div class="option-example-text">
                                    <p>Price Range (Rent)</p>
                                    <p><b>160$ - 500$</b></p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> -->
            </div>
        <?php endif; ?>
    </header>