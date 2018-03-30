<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="TP Site Cuisine" content="recettes, cuisine, nourriture">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../../../assets/css/normalize.css">
        <link rel="stylesheet" href="../../../assets/css/bulma.css">
        <link rel="stylesheet" href="../../../assets/css/main.css">

    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header id="header" class="clearfix">
            <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a href="index.html" class="navbar-item"><img src="../../../assets/img/giphy.gif" width="50" height="250" alt="Gif sel"></a>
                </div>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a href="Home.html"  class="navbar-item">Home</a>
                        <a href="List.html"  class="navbar-item">List</a>
                        <a href="Manage.html"  class="navbar-item">Manage</a>
                    </div>
                    <div class="navbar-end">
                        <a href="Admin.html" target="_blank" class="navbar-item">Admin</a>
                    </div>    
                </div>
                <button class="button navbar-burger" id="navbar-burger">
                    <span>Home</span>
                    <span>List</span>
                    <span>Manage</span>
                </button>
            </nav>
        </header>

        <section id="titre" class="hero is-primary is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1">WOW !!!</h1>
                    <h2 class="subtitle is-2">Ca à l'air fort délicieux !</h2>
                </div>
            </div>    
        </section>

        <main class="mainContent">
            
            <section id="recherche" class="hero is-light">
                <div class="container has-text-centered">
                    <h2 class="title">Recherche une petite recette des familles !</h2>
                    <form action="#">
                        <div class="field has-addons has-addons-centered">
                            <div class="control">
                                <input class="input is-medium" type="search" value="Recherchez"/>
                            </div>
                            <div class="control">
                                <button class="button is-medium" aria-hidden="true">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>