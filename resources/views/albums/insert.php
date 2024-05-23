<div class="container row text-center mx-auto my-5">
    <form method="post" class="mx-auto bg-light border border-2 rounded col-6 px-3 pt-3" enctype="multipart/form-data">
        <h1>Album feltöltése</h1>
        <label for="artist" class="form-label">Előadó</label><br>
        <input type="text" name="artist" class="form-control"><br>
        <label for="title" class="form-label">Cím</label>
        <input type="text" name="title" class="form-control"><br>
        <label for="cover" class="form-label">Borító</label>
        <input type="file" accept=".png,.jpg,.jpeg,.webp" name="cover" class="form-control"><br>
        <input type="submit" name="insert" value="Feltöltés" class="btn btn-primary mb-3">
    </form>
</div>
