<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre de Navigation</title>

    <!-- Inclure Bootstrap CSS (à partir de CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles personnalisés -->
    <style>
        /* Ajoutez ici vos styles personnalisés */
    </style>
</head>
<body>

<!-- Barre de navigation Bootstrap -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo et lien vers la page d'accueil -->
        <a class="navbar-brand" href="#">Mon Site</a>

        <!-- Bouton de navigation mobile (hamburger) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenu de la barre de navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
                <!-- Sélecteur de catégories -->
                <select class="form-select d-block d-lg-none mb-2">
                    <option value="toutes">Toutes Catégories</option>
                    <option value="electronique">Électronique</option>
                    <option value="mode">Mode</option>
                    <option value="maison">Maison et Cuisine</option>
                    <!-- Ajoutez d'autres catégories ici -->
                </select>

                <!-- Barre de recherche -->
                <form class="form-inline mb-2 mb-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </ul>

            <!-- Boutons d'inscription et de connexion (alignés à droite) -->
            <div class="ml-lg-auto">
                <button class="btn btn-light mx-2">Inscription</button>
                <button class="btn btn-success">Connexion</button>
            </div>
        </div>
    </div>
</nav>

<!-- Contenu de la page -->
<div class="container">
    <!-- Votre contenu ici -->
    <h1 class="mt-5">Bienvenue sur Mon Site</h1>
    <p>Découvrez nos produits incroyables.</p>
</div>

<!-- Inclure Bootstrap JS (à partir de CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
