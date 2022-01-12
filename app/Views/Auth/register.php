<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inscription</title>
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>

    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Inscription</h4><hr>
                <form action="http://localhost/codeigniter_formulairecreation/public/Auth/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom"
                    </div>
                    <div class="form-group">
                        <label for="">Mail</label>
                        <input type="text" class="form-control" name="mail" placeholder="Entrer votre mail"
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe</label>
                        <input type="text" class="form-control" name="mot de passe" placeholder="Entrer votre mot de passe"
                    </div>
                    <div class="form-group">
                        <label for="">Confirmer votre mot de passe</label>
                        <input type="text" class="form-control" name="mot de passe" placeholder="Confirmer votre mot de passe"
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Inscription</button>
                    </div>
                    <br>
                    <a href="http://localhost/codeigniter_formulairecreation/public/Auth">J'ai déjà un compte, me connecter</a>
                </form>
    </div>
    
</body>
</html>