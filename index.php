<?php $title = 'home';
$dir ='.';
require './app/view/header/header.php'; 

?>
<div id="container" class="container" style="height:100vh; overflow-y:scroll">

    <!-- navbar -->
    <?php require './app/view/nav/nav.php' ?>
    <!-- image pizza -->
    <div class="container" style="height: 500px; overflow:hidden;">
        <img src="./assets/img/pizza.jpg" class="img-fluid" alt="...">
    </div>
    <!-- Image produit -->
    <div class="container d-flex flex-wrap justify-content-center gap-5 p-2 mt-3">
        <img src="./assets/img/pizza.jpg" class="shadow" alt="..." style="width:300px;height:200px;opacity:.9">
        <img src="./assets/img/pizza.jpg" class="shadow" alt="..." style="width:300px;height:200px;opacity:.9">
        <img src="./assets/img/pizza.jpg" class="shadow" alt="..." style="width:300px;height:200px;opacity:.9">
    </div>
    <!-- menu et filtres -->
    <div class="container mt-1 bg-light p-3">
        <h1 class="text-center" style="font-weight:bold; font-family:'Courier New', Courier, monospace">Notre Menu 🤗</h1>
        <div class="container  d-flex gap-1">
                <input type="text" placeholder='trouver le plat que vous voulez...' class="form-control"><button class='btn btn-warning'>Rechercher</button>
        </div>
        <div class="container d-flex flex-wrap gap-5 justify-content-center mt-5">
            <a href="" class="btn btn-outline-warning" style="border-radius:20px;">Pizzas</a>
            <a href="" class="btn btn-outline-secondary" style="border-radius:20px;">Soupes</a>
            <a href="" class="btn btn-outline-secondary" style="border-radius:20px;">Riz</a>
            <a href="" class="btn btn-outline-secondary" style="border-radius:20px;">Tacos</a>
            <a href="" class="btn btn-outline-secondary" style="border-radius:20px;">Sambos</a>
            <a href="" class="btn btn-outline-secondary" style="border-radius:20px;">Gratins</a>
            <a href="" class="btn btn-outline-secondary" style="border-radius:20px;">Boissons</a>
            <a href="" class="btn btn-outline-secondary" style="border-radius:20px;">Glaces</a>
        </div>
        <div class="container d-flex justify-content-center gap-4 mt-5 flex-wrap">
                <div class="card shadow" style="width: 20rem;">
                        <img src="./assets/img/pizza.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>Hamburger</p>
                            <a href="#" class="btn btn-warning text-center">Ajouter a la commande 🍽️</a>
                        </div>
                </div>
                <div class="card shadow" style="width: 20rem;">
                        <img src="./assets/img/pizza.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>Hamburger</p>
                            <a href="#" class="btn btn-warning text-center">Ajouter a la commande 🍽️</a>
                        </div>
                </div>
                <div class="card shadow" style="width: 20rem;">
                        <img src="./assets/img/pizza.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>Hamburger</p>
                            <a href="#" class="btn btn-warning text-center">Ajouter a la commande 🍽️</a>
                        </div>
                </div>
                <div class="card shadow" style="width: 20rem;">
                        <img src="./assets/img/pizza.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>Hamburger</p>
                            <a href="#" class="btn btn-warning text-center">Ajouter a la commande 🍽️</a>
                        </div>
                </div>
        </div>
        <div class="container absolute  mt-5 " style='height:20px;'>  
            <h6 class='text-center'>Copyright 2024 Yummy. Made with ❤️ by <a href="www.github.com/BranGitfox">Brandon Fidelin</a> </h6>
        </div>
    </div>



</div>


<?php require './app/view/footer/footer.php'; ?>