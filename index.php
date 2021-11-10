<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>S.I.D</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<h1 class="centrer">S.I.D</h1>
<p class="centrer">Merci de vous connectez pour accéder à votre base de données.</p>
<p class="centrer"><b class="attention">Attention</b>: Un lecteur d'empreinte digitale vous sera nécessaire.</p>
<form action="login.php" method="post">
    <div class="container">
      <p><label for="identifiant"><b>identifiant:</b></label></p>
      <input type="text" placeholder="Entrer votre identifiant" name="identifier" id="identifiant" required> 
  
      <p><label for="mot_de_passe"><b>Mot de passe:</b></label></p>
      <input type="password" placeholder="Entrer votre mot de passe" name="mdp" id="mdp" required>
      <div>Vérification de l'empreinte digitale:</div>
      <br>
      <img class="img" src="image/empreinte.jpg" >
      <p><button type="submit" name="connexion" value="valider" class="registerbtn">Connexion</button></p>
    </div>
  </form>  
</body>
</html>