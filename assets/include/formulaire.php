    <!-- date verification , accées a la page oui ou non  -->
<div class="taillebody">
    <div style="text-align: center;">
        <FORM action="assets/include/traitement.php" method="post">

            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" placeholder="Entrez nom en majuscules" name="Nom" required>
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Prenom</label>
                <input type="text" class="form-control" placeholder="Entrez prénom" name="Prenom" required>
        </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse Mail</label>
                <input id="mail1" type="email" class="form-control" placeholder="Entrez email" onchange="DoubleCheck()" name="Mail" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Confirmer Adresse Mail</label>
            <input id="mail2" type="email" class="form-control" placeholder="Entrez email" onchange="DoubleCheck()" onpaste required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Votre date de naissance</label>
            <input id="date" type="date" class="form-control" name="Date" required>
        </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Téléphone(optionnel)</label>
                <input type="tel" class="form-control" placeholder="Entrez numéro de téléphone , Il sera utilsé pour des besoins urgents (stage, document manquant, etc)" name="Tel">
        </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mot de passe (minimum : 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre)</label>
                <input id="mdp1" type="password" class="form-control" placeholder="Entrez Mot de passe" onchange="DoubleCheck()" name="Mdp" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Confirmer mot de passe</label>
            <input id="mdp2" type="password" class="form-control" placeholder="Entrez Mot de passe" onchange="DoubleCheck()" required>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">J'ai pris connaissance de mes droits d'accès de rectification et de suppression de mes données à caractère personnel</label>
        </div>
            <input type="Submit" value="S'enregister" id="submit" disabled>
        </FORM>
        </div>
</div>
        <script src ="assets/js/register.js"></script>