<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Connexion</title>
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>

    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Connexion</h4><hr>
                <form action="">
                    <div class="form-group">
                        <label for="">Mail</label>
                        <input type="text" class="form-control" name="mail" placeholder="Entrer votre mail"
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe</label>
                        <input type="text" class="form-control" name="mot de passe" placeholder="Entrer votre mot de passe"
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Connexion</button>
                    </div>
                    <br>
                    <a href="http://localhost/codeigniter_formulairecreation/public/Auth/register">Je n'ai pas de compte, je m'inscris</a>
                </form>
    </div>
    
</body>
</html>