<div class="container">
    <h1 class="text-center">Üdvözöljük az albumértékelős weboldalon!</h1>
    <h2>Eddigi értékelések:</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Felhasználó</th>
                <th scope="col">Album</th>
                <th scope="col">Értékelés</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION["ratings"] as $rating):
            ?>
            <tr>
                <td><?= $rating[0] ?></td>
                <td><?= $rating[1] ?></td>
                <td>
                    <?php
                    for ($i = 0; $i < $rating[2]; $i++):
                    ?>
                    ★   
                    <?php
                    endfor;
                    ?>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>
