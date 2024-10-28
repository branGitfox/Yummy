<?php $title = 'home';
require './app/view/header/header.php'; ?>
<div class="container">

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand text-warning"  href="#" style="font-family: Arial, Helvetica, sans-serif;">YUMMY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container" style="height: 500px; overflow:hidden;">
        <img src="./assets/img/pizza.jpg" class="img-fluid" alt="...">
    </div>
    <div class="container mt-5 bg-light p-5" >
        <h1 class="text-center" style="font-weight:bold; font-family:'Courier New', Courier, monospace">Notre Menu</h1>
        <div class="container d-flex flex-wrap gap-5 justify-content-center mt-5">
                <a href="" class="btn btn-outline-warning" style="border-radius:20px;">Pizza</a>
                <a href="" class="btn btn-outline-warning" style="border-radius:20px;">Soupe</a>
                <a href="" class="btn btn-outline-warning" style="border-radius:20px;">Tacos</a>
                <a href="" class="btn btn-outline-warning" style="border-radius:20px;">Sambos</a>
                <a href="" class="btn btn-outline-warning" style="border-radius:20px;">Soupe</a>
        </div>
    </div>
    

</div>


<?php require './app/view/footer/footer.php'; ?>