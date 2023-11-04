<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <?= $IndependenceController->translate("Premiére Projet", $lang); ?>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="dashboard.php">
                        <?= $IndependenceController->translate("Acceuil", $lang); ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inscriptionList">
                        <?= $IndependenceController->translate("Liste des inscriptions", $lang); ?>
                    </a>
                </li>
            </ul>

            <div class="d-flex nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Super Admin
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">
                            <?= $IndependenceController->translate("Mon Profile", $lang); ?>
                        </a></li>
                    <li><a class="dropdown-item" href="#">
                            <?= $IndependenceController->translate("Modifier profile", $lang); ?>
                        </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="index.php">
                            <?= $IndependenceController->translate("Déconnexion", $lang); ?>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>