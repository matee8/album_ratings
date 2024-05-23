<div class="container">
    <div class="row">
        <?php
        foreach ($_SESSION["albums"] as $album):
        ?>
        <div class="col-lg-3 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= $album[3] ?>" class="card-img-top" alt="<?= $album[1] ?> borító" title="<?= $album[1] ?> borító">
                <div class="card-body">
                    <h5 class="card-title"><?= $album[1] ?></h5>
                    <p class="card-text"><?= $album[2] ?></p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $album[0] ?>">
                        Értékelés
                    </button>
                </div>
            </div>
        </div>
        <?php
        endforeach;
        ?>
    </div>
</div>

<?php
foreach ($_SESSION["albums"] as $album):
?>
<div class="modal fade" id="<?= $album[0] ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5"><?= $album[1] . ": " . $album[2] ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="number" name="rating" class="form-control mb-2" min="1" max="5">
                    <input type="hidden" name="id" value="<?= $album[0] ?>">
                    <input type="submit" name="rate" class="btn btn-primary w-100" value="Értékelés">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bezárás</button>
            </div>
        </div>
    </div>
</div>
<?php
endforeach;
?>
