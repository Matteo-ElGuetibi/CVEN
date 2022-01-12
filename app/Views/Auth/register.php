<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inscription</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <div class="row" style="margin-top:45px">
            <div>
                <h4 class="text-center text-primary ">Inscription</h4><hr>
                <form action="http://localhost/codeigniter_formulairecreation/public/Auth/save" method="post">
                    <?= csrf_field(); ?>
                    <br><div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Entrer votre nom"
                    </div>
                    <br><div class="form-group">
                        <label for="">Mail</label>
                        <input type="text" class="form-control" name="mail" placeholder="Entrer votre mail"
                    </div>
                    <br><div class="form-group">
                        <label for="">Mot de passe</label>
                        <input type="text" class="form-control" name="mot de passe" placeholder="Entrer votre mot de passe"
                    </div>
                    <br><div class="form-group">
                        <label for="">Confirmer votre mot de passe</label>
                        <input type="text" class="form-control" name="mot de passe" placeholder="Confirmer votre mot de passe"
                    </div>
                    <br><br><div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Inscription</button>
                    </div>
                    <br>
                    <a href="http://localhost/codeigniter_formulairecreation/public/Auth">J'ai déjà un compte, me connecter</a>
                </form>
    </div>
    
</body>
</html>