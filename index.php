<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css_cven.css" type="text/css" >
    </head>
    <body>
        <h1>Site du jura</h1>
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
                    <label for="optionsupp">pension complète
                        <input type="checkbox" name="optionsupp" id="pension_complete">
                    </label>
    </body>
</html>