<?php require('header.php'); ?>
<?php require('fonctions.php'); ?>

<h1 style="text-align: center;">FORMULAIRE</h1>
<br/>
<br/>
<p>Entrez vos coordonnées :</p>
<form method="POST" action="receptionpost.php">
    <fieldset>
    <legend>Vos coordonnées</legend>
        <p><label for="surname" id="surname">Votre prénom : </label> <input type="text" name="surname" placeholder="Prénom" /></p>

        <p><label for="name" id="name">Votre nom : </label> <input type="text" name="name" placeholder="Nom" /></p>

        <p><label for="password">Votre mot de passe : </label> <input type="password" name="password" id="password" placeholder="Mot de passe" /></p>

        <p><label for="email">Votre email : </label> <input type="email" name="email" id="email" placeholder="Adresse email" /></p>
       
        <p><label for="tel">Votre téléphone : </label> <input type="tel" name="tel" id="tel" placeholder="N° téléphone" /></p>

        <p><label for="age">Votre âge : </label> <input type="number" name="age" id="age" placeholder="Âge" min="18" max="90" step="2" /></p>

    </fieldset>

        <input type="submit" value="Envoyer" />


</form>
<?php require('footer.php'); ?>

