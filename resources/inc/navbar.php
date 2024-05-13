<nav class="navbar navbar-dark navbar-expand-lg bg-dark mb-3">
    <div class="container">
        <a class="navbar-brand" href="./index.php">Album értékelés</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link<?= !isset($_GET["page"]) ? " active\" aria-current=\"page\"" : "\"" ?> href="./index.php">Főoldal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= isset($_GET["page"]) && $_GET["page"] == "view" ? " active\" aria-current=\"page\"" : "\"" ?> href="./index.php?page=view">Albumok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= isset($_GET["page"]) && $_GET["page"] == "upload" ? " active\" aria-current=\"page\"" : "\"" ?> href="./index.php?page=insert">Feltöltés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= isset($_GET["page"]) && $_GET["page"] == "update" ? " active\" aria-current=\"page\"" : "\"" ?> href="./index.php?page=update">Módosítás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= isset($_GET["page"]) && $_GET["page"] == "delete" ? " active\" aria-current=\"page\"" : "\"" ?> href="./index.php?page=delete">Törlés</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php 
                    if (!isset($_SESSION["logged_in"])):
                ?>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="./index.php?page=registration">Regisztráció</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="./index.php?page=login">Bejelentkezés</a>
                </li>
                <?php 
                    else:
                ?>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="./index.php?page=logout">Kijelentkezés</a>
                </li>
                <?php
                    endif;
                ?>
            </ul>
        </div>
    </div>
</nav>
