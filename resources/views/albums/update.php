<div class="container">
    <form method="post">
        <div class="mb-3">
            <label for="id" class="form-label">Válasszon egy albumot!</label>
            <select class="form-select" name="id">
                <?php
                if (isset($_SESSION["albums"])) {
                    foreach ($_SESSION["albums"] as $album):
                        echo "<option value={$album[0]}>{$album[1]}: {$album[2]}</option>";
                    endforeach;
                }
                ?>
            </select>
            <button type="submit" name="choose" class="btn btn-primary form-control mt-3">Kiválasztás</button>
        </div>
    </form>
    <?php
    if (isset($_SESSION["album"]) && $_SESSION["album"] != "invalid" 
        && $_SESSION["album"] != "updated"):
    ?>
    <form method="post" class="mx-auto" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="artist" class="form-label">Előadó</label>
            <input type="text" class="form-control" name="artist" value="<?= $_SESSION["album"][1] ?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Cím</label>
            <input type="text" class="form-control" name="title" value="<?= $_SESSION["album"][2] ?>">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Borító</label>
            <input type="file" class="form-control" accept=".png,.jpg,.jpeg,.webp" name="cover" value="<?= $_SESSION["album"][3] ?>">
        </div>
        <input type="hidden" name="id" value="<?= $_SESSION["album"][0] ?>">
        <button type="submit" class="btn btn-primary" name="update">Módosítás</button>
    </form>
    <?php
    elseif (isset($_SESSION["album"]) && $_SESSION["album"] == "updated"):
    unset($_SESSION["album"]);
    ?>
    <h1 class="text-center">Sikeres módostás!</h1>
    <?php
    else:
    ?>
    <h1 class="text-center">Kérjük, válasszon albumot!</h1>
    <?php
    endif;
    ?>
</div>
