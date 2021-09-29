<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>
<body>
<!--MAIN NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">TemaZero</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu( ['menu' => 'primary'] ) ?>
        </div>
    </div>
</nav>
<!-- /MAIN NAVBAR-->

<!-- HEADER -->
<header class="bg-dark bg-gradient text-center py-5 text-light">
    <h1><?php the_title()?></h1>
</header>

<!-- MAIN -->
<main>