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
        
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="<?=base_url?>assets/css/estilos.css">
    </head>
    <body>
        <header class="header">
            <nav class="navigation">
                <div class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <circle cx="7" cy="17" r="2" />
                        <circle cx="17" cy="17" r="2" />
                        <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" />
                    </svg>
                </div>
                <div class="pages">
                    <a class="page active" href="<?php base_url?>/">Home</a>
                    <a class="page" href="<?php base_url?>/car/list">Cars</a>
                    <a class="page" href="<?php base_url?>/service/index">Services</a>
                    <a class="page" href="<?php base_url?>/testimonials/index">Testimonials</a>
                </div>
                <div class="option">
                    <a class="btn btn-primary" href="#">Register</a>
                    <a class="btn btn-primary" href="#">Login</a>
                </div>
            </nav>
        </header>