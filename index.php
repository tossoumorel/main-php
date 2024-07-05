<html>

<head>
  <meta charset="utf-8" />
  <title>Ceci est une page HTML de test</title>
</head>

<body>
  <h2>Page de test</h2>
  <p>
    Cette page contient <strong>uniquement</strong> du code HTML.<br />

    Voici quelques petits tests :
  </p>


  <p>
    Cette ligne a été écrite entièrement en HTML.<br />
    <?php echo ("Celle-ci a été écrite entièrement en PHP."); ?>
  </p>

  <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

  <ul>
    <li style="color: blue;">Texte en bleu</li>
    <li style="color: red;">Texte en rouge</li>
    <li style="color: green;">Texte en vert</li>
  </ul>


  <!-- Afficher une variable -->

  <?php

  echo $auh = 17;
  echo $monNom = "Mathieu, je  \"suis\" en classe de marternelle</br>";

  echo $nom = "Mathieu Nebra </br>";

  echo " Mon est {$nom} </br>";

  echo 'Mon nom est ' . $nom . ' <strong>meilleur</strong>';

  // conditions
  $isEnabled = true;
  $isOwner = false;
  if ($isEnabled && $isOwner) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
  } elseif ($isEnabled || $isOwner) {
    echo "Accès refusé ❌";
  } else {
    echo "Bientôt";
  }
  ?>
</body>

</html>

