<div class="container row text-center mx-auto my-5">
    <form method="post" class="mx-auto bg-light border border-2 rounded col-6 px-3 pt-3">
        <h1>Bejelentkezés</h1>
        <label for="username" class="form-label">Felhasználónév</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" name="username" class="form-control" aria-describedby="basic-addon1">
        </div>
        <label for="password" class="form-label">Jelszó</label><br>
        <input type="password" name="password" class="form-control"><br>
        <input type="submit" name="login" value="Bejelentkezés" class="btn btn-primary">
        <p class="mt-2">Még nincs fiókod? <a href="../public/index.php?page=registration" class="text-primary">Regisztrálj!</a></p>
    </form>
</div>
