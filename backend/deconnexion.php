<?php include "../header.php"; ?>
<?php 
// $_SESSION vide quand je demarre ma session_start()
// connexion reussi => $_SESSION['user'] Existant
//  $_SESSION['user'] => unset
// $_SESSion['age']  : session_destroy() => age et le user

// unset($_SESSION['user']);


session_destroy();
?>
<p style="color: green;">Vous êtes deconnecté...</p>
<br/>
<p>Vous pouvez vous reconnecter <a href="connexion.php">ici</a></p>
<?php include "../footer.php"; ?>