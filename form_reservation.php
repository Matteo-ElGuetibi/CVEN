<!DOCTYPE html>
<html>
    <?php 
    require 'gabarit.php';
    ?>
    <body>
        <h2>Réservation</h2>
        <form>
                <p class="tform">informattion personnelles</p>
            <label for="nom">Nom
                <input type="text" name="nom" id="nom">
            </label>
            <label for="prenom">Prenom
                <input type="text" name="prenom" id="prenom">
            </label>
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
            <br/>
            <p class="tform">option supplémentaire</p>
                <label for="optionsupp">pension complète
                    <input type="checkbox" name="optionsupp" id="pension_complete">
                </label>
            <p class="tform">date de séjour</p>
            <label for="datedebut">date de début de sejour
                <input type="date" name="datedebut" id="datedebut" value="date_Arrive">
            </label>
            <br/>
            <label for="datefin">date de fin de sejour
                <input type="date" name="datefin" id="datefin" value="date_Depart">
            </label>
            
            
        </form>
    </body>
</html>