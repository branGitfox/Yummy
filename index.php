<?php
session_start();
 $title = 'home';
$dir ='.';
require './app/config/Database.php';
require './app/model/ProductModel.php';
require './app/controller/ProductControlelr.php';
require './app/view/header/header.php'; 

$prod = new ProductController();



?>
<div id="container" class="container" style="height:100vh; overflow-y:scroll">

    <!-- navbar -->
    <?php require './app/view/nav/nav.php' ?>
    <!-- image pizza -->
    <div class="container" style="height: 500px; overflow:hidden;">
        <img src="./assets/img/pizza.jpg" class="img-fluid" alt="...">
    </div>
    <!-- Image produit -->
     <div class="container mt-4 mb-2">
        <h2 class="text-center">Plats du Jour 🍽️🥂</h2>
     </div>
    <div class="container d-flex flex-wrap justify-content-center gap-5 p-2 mt-3">
        <img id="first" class="shadow" alt="..." style="width:300px;height:200px;opacity:.9">
        <img id="second"  class="shadow" alt="..." style="width:300px;height:200px;opacity:.9">
        <img id="third"  class="shadow" alt="..." style="width:300px;height:200px;opacity:.9">
    </div>
    <!-- menu et filtres -->
    <div class="container mt-1 bg-light p-3">
        <h1 class="text-center" style="font-weight:bold; font-family:'Courier New', Courier, monospace">Notre Menu 🤗</h1> 
        <form method="">
        <div class="container  d-flex gap-1">
           
                <input type="text" placeholder='trouver le plat que vous voulez...' class="form-control" name="q"><button class='btn btn-warning'>Rechercher</button>
           
        </div> 
    </form>
        <div class="container d-flex flex-wrap gap-5 justify-content-center mt-5">
            <a href="index.php" class="btn btn-outline-warning" style="border-radius:20px;">Toutes</a>
            <a href="index.php?f=1" class="btn btn-outline-secondary" style="border-radius:20px;">Tacos</a>
            <a href="index.php?f=2" class="btn btn-outline-secondary" style="border-radius:20px;">Soupes</a>
            <a href="index.php?f=3" class="btn btn-outline-secondary" style="border-radius:20px;">Sambos</a>
            <a href="index.php?f=4" class="btn btn-outline-secondary" style="border-radius:20px;">Gratins</a>
            <a href="index.php?f=5" class="btn btn-outline-secondary" style="border-radius:20px;">Boissons</a>
            <a href="index.php?f=6" class="btn btn-outline-secondary" style="border-radius:20px;">Glaces</a>
            <a href="index.php?f=7" class="btn btn-outline-secondary" style="border-radius:20px;">Riz</a>
        </div>
        <div class="container d-flex justify-content-center gap-4 mt-5 flex-wrap">
            <?php foreach($prod->GetAll() as $pr):?>
                <div class="card shadow" style="width: 20rem;">
                        <img src="./assets/img/<?=$pr['prodimg']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p><?= $pr['prodname']?></p>
                            <a href="./app/view/cart/command.php?id_prod=<?= $pr['id_prod']?>" class="btn btn-warning text-center">Ajouter a la commande 🍽️</a>
                        </div>
                </div>
                <?php endforeach?>
        </div>
        <div class="container absolute  mt-5 " style='height:20px;'>  
            <h6 class='text-center'>Copyright 2024 Yummy. Made with ❤️ by <a href="www.github.com/BranGitfox">Brandon Fidelin</a> </h6>
        </div>
    </div>



</div>


<?php require './app/view/footer/footer.php'; ?>