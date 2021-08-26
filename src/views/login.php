<div class="container">
    <div class="container-form m-auto border rounded py-4 px-3" style="width: 35%;">
        <div class="form-title text-center px-4 pb-3">
            <h3>Connexion</h3>
        </div>
        <form class="row g-4 justify-content-center" method="POST">
            <div class="col-9">
                <label for="email" class="form-label">Nom d'utilisateur ou email</label>
                <input type="email" class="form-control" id="user" name="user" placeholder="Nom d'utilisateur ou email" required>
            </div>
            <div class="col-9">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="col-9 text-center">
                <button class="btn btn-outline-primary" type="submit" name="login">Se connecter</button>
            </div>
        </form>
    </div>
</div>