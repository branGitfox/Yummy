<nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand text-warning"  href="" style="font-family: Arial, Helvetica, sans-serif;">YUMMY😋</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./app/view/cart/cart.php">Votre Commande</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A propos de nous</a>
                    </li>
                </ul>
                <form class="d-flex align-items-center gap-3" role="search">
                    <h6 class=" mt-2"><?= $_SESSION['users']['name']?></h6>
                    <img src="<?= './app/images/'.$_SESSION['users']['profil']?>"  style="width: 30px; height:30px;border-radius:50%;" alt="">
                </form>
            </div>
        </div>
    </nav>