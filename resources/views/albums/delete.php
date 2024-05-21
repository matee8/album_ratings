<div class="container">
    <table class="table table-striped table-hover text-center">
        <thead>
            <tr>
                <th>Előadó</th>
                <th>Cím</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION["albums"])):
                foreach ($_SESSION["albums"] as $album):
            ?>
            <tr>
                <form method="post">
                    <input type="hidden" value="<?= $album[0] ?>" name="id">
                    <td>
                        <?= $album[1] ?>
                    </td>
                    <td>
                        <?= $album[2] ?>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger form-control" name="delete">Törlés</button>
                    </td>
                </form>
            </tr>
            <?php
                endforeach;
            endif;
            ?>
        </tbody>
    </table>
</div>
