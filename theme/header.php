<?php

include "components/define-domain.php";
include "components/svg-sprite.php";

?>
<!doctype html>
<html lang="tr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Berasit furniture">
    <title>Berasit Furniture</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <style>
        @font-face {
            font-display: swap;
            font-family: Montserrat;
            font-style: normal;
            font-weight: 400;
            src: url('<?= domain ?>assets/fonts/montserrat-v26-latin-regular.woff2') format('woff2')
        }

        @font-face {
            font-display: swap;
            font-family: Montserrat;
            font-style: normal;
            font-weight: 500;
            src: url('<?= domain ?>assets/fonts/montserrat-v26-latin-500.woff2') format('woff2')
        }

        @font-face {
            font-display: swap;
            font-family: Montserrat;
            font-style: normal;
            font-weight: 600;
            src: url('<?= domain ?>assets/fonts/montserrat-v26-latin-600.woff2') format('woff2')
        }

        @font-face {
            font-display: swap;
            font-family: Montserrat;
            font-style: normal;
            font-weight: 700;
            src: url('<?= domain ?>assets/fonts/montserrat-v26-latin-700.woff2') format('woff2')
        }
    </style>
    <link rel="stylesheet"
        href="<?= domain ?>assets/css/main.css<?= $_SERVER['REMOTE_ADDR'] == '::1' ? '?v=' . rand() : '' ?>">
</head>

<body>
    <header class="header_lg block md:hidden pt-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 flex items-end pb-6">
                    <a href="" class="block">
                        <img src="<?= domain ?>assets/img/logo.webp" alt="Berasit Furniture logo"
                            class="block h-12 object-contain object-center" width="146" height="50">
                    </a>
                </div>
                <div class="col-lg-10 flex flex-col items-end">
                    <div class="flex items-center justify-end gap-x-6">
                        <div class="flex items-center gap-x-7">
                            <a href="" class="btn_gray">E-Katalog</a>
                            <a href="" class="btn_gray">Mimar Girişi</a>
                        </div>
                        <a href=""
                            class="header_blog text-black text-sm leading-none transition-colors transition-300">Berasit
                            Blog</a>
                        <div class="header_langs flex items-center gap-x-6">
                            <a href=""
                                class="active relative before-absolute text-black transition-colors transition-300 text-sm leading-relaxed">TR</a>
                            <a href=""
                                class="relative before-absolute text-black transition-colors transition-300 text-sm leading-relaxed">EN</a>
                        </div>
                    </div>
                    <nav aria-label="Main menu" id="main-nav" class="flex items-center gap-x-7.5">
                        <a href="" class="relative after-absolute font-medium text-black pt-8 pb-10 block">Anasayfa</a>
                        <a href="" class="relative after-absolute font-medium text-black pt-8 pb-10 block">Ürünler</a>
                        <a href="" class="relative after-absolute font-medium text-black pt-8 pb-10 block">Projeler</a>
                        <a href="" class="relative after-absolute font-medium text-black pt-8 pb-10 block">Kurumsal</a>
                        <a href="" class="relative after-absolute font-medium text-black pt-8 pb-10 block">İletişim</a>
                    </nav>
                </div>
            </div>

        </div>
    </header>

    <header class="header_sm relative hidden md:block bg-primary z-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="" class="logo">
                        <img src="<?= domain ?>assets/img/logo.webp" alt="Berasit Furniture logo">
                    </a>
                </div>
                <div class="col-6 flex items-center">
                    <div class="menuButton bg-primary relative flex flex-col items-center justify-between">
                        <span class="block w-full"></span>
                        <span class="block w-full absolute"></span>
                        <span class="block w-full"></span>
                        <span class="block w-full"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobileMenu hidden md:block fixed w-screen h-screen z-4 bg-primary">
        <nav aria-label="Mobile menu" id="nav-mobile-1"></nav>
    </div>