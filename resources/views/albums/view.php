<div class="container">
    <?php
    foreach ($albums as $album):
    ?>
    <p><?= $album[0] ?>: <?= $album[1] ?></p>
    <?php
    endforeach;
    ?>
</div>
