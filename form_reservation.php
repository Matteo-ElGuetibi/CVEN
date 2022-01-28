<!DOCTYPE html>

<html>
    <?php
    require 'gabarit.php';
    ?>
    <body>
        <div class="styler">
            <h2>Réservation</h2> <hr>
        <form method="POST" >
            <p class="tform">Informations personnelles</p>
            <label for="nom">Nom
                <input type="text" name="nom" id="nom">
            </label>
            <label for="prenom">Prenom
                <input type="text" name="prenom" id="prenom">
            </label>
            <hr>
            <p class="tform">Choississez le type de reservation</p>
            <label for="reservation" >logements
                <input type="radio" name="reservation" id="logements" value="logements"></label>
            <label for="reservation">chambres doubles
                <input type="radio" name="reservation" id="chambres_doubles" value="chambres_doubles"></label>
            <label for="reservation">chambres de 3 lits séparés
                <input type="radio" name="reservation" id="3lit_separe" value="3lit_separe"></label>
            <label for="reservation">chambres de 4 lits séparés
                <input type="radio" name="reservation" id="4lit_separe" value="4lit_separe"></label>
            <label for="reservation">logement adapté pour les personnes à mobilité réduite.
                <input type="radio" name="reservation" id="log_mobilite" value="log_mobilite"></label>
                <br/><hr>
            <p class="tform">Option supplémentaire</p>
            <label for="optionsupp">pension complète
                <input type="checkbox" name="optionsupp" id="pension_complete">
            </label><hr>
            <p class="tform">Date de séjour</p>
            <label for="datedebut">Date de début de sejour
                <input type="date" name="datedebut" id="datedebut" >
            </label>
            <br/>
            <label for="datefin">Date de fin de sejour
                <input type="date" name="datefin" id="datefin">
            </label><hr>
            </div >
            <br/>
            <div class="styler3">
            <button>Reserver votre séjour</button>
    </div>
            <?php
            if (isset($_POST['nom'])) {
                $_POST['nom'];
            }
            if (isset($_POST['prenom'])) {
                $_POST['prenom'];
            }
            if (isset($_POST['reservation'])) {
                $_POST['reservation'];
            }
            if (isset($_POST['optionsupp'])) {
                $_POST['optionsupp'];
            }
            if (isset($_POST['datedebut'])) {
                $_POST['datedebut'];
            }
            if (isset($_POST['datefin'])) {
                $_POST['datefin'];
            }
            ?>
            
        </form>
    </body>
</html>
