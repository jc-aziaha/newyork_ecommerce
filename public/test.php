<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site E-Commerce</title>

    <!-- Inclure Bootstrap CSS (à partir de CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles personnalisés -->
    <style>
        /* Ajoutez ici vos styles personnalisés */
        .navbar-nav {
            margin: 0 auto; /* Centrer les liens du menu */
        }
    </style>
</head>
<body class="bg-light">

    <!-- Barre de navigation Bootstrap -->
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top">
        <div class="container-fluid">
            <!-- Logo et lien vers la page d'accueil -->
            <a class="navbar-brand" href="#">ElectroTech</a>

            <!-- Bouton de navigation mobile (hamburger) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Liens du menu de navigation -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mes souhaits <i class="fa-regular fa-heart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mon panier <i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <!-- Dropdown pour la barre de recherche -->
                    
                    <!-- Boutons d'inscription et de connexion -->
                    <div class="d-lg-flex my-3 my-lg-0 mx-lg-3">
                        <div class="input-group">
                            <form class="d-flex" role="search">
                                <input class="form-control" type="search" placeholder="Rechercher un produit" aria-label="Rechercher un produit">
                                <button id="search-button" type="submit" class="btn btn-dark">
                                    <i class="fas fa-search"></i>
                                </button>                    
                            </form>
                        </div>
                    </div>
                </ul>
                <button class="btn btn-light my-3 my-lg-0 mx-lg-2">Inscription</button>
                <button class="btn btn-success my-3 my-lg-0">Connexion</button>
            </div>

        </div>
    </nav>

    <!-- Contenu de la page -->
    <!-- <div class="container mt-5">
        <h1>Bienvenue sur Mon E-Commerce</h1>
        <p>Découvrez nos produits incroyables.</p>
    </div> -->

<!-- Inclure Bootstrap JS (à partir de CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
