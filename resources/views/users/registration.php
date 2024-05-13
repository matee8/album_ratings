<div class="container row text-center mx-auto my-5">
    <form method="post" class="mx-auto bg-light border border-2 rounded col-6 px-3 pt-3">
        <h1>Regisztráció</h1>
        <label for="username" class="form-label">Felhasználónév</label><br>
        <input type="text" name="username" class="form-control"><br>
        <label for="email" class="form-label">E-mail cím</label>
        <input type="email" name="email" class="form-control"><br>
        <label for="password" class="form-label">Jelszó</label><br>
        <input type="password" name="password" class="form-control"><br>
        <label for="password_again" class="form-label">Jelszó újra</label><br>
        <input type="password" name="password_again" class="form-control"><br>
        <input type="submit" name="register" value="Regisztráció" class="btn btn-primary">
        <p class="mt-2">Van már fiókod? <a href="./index.php?page=login" class="text-primary">Bejelentkezés!</a></p>
    </form>
</div>
