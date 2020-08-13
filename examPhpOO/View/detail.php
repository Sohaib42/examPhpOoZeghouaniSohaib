<<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
    <h1>Voiture n°<?php echo $voiture->getId()?> </h1><br>
    <h2>Marque : </h2><h3><?php echo $voiture->getMarque()?></h3><br>
    <h2>Modele : </h2><h3><?php echo $voiture->getModele()?></h3><br>
    <h2>Energie : </h2><h3><?php echo $voiture->getEnergie()?></h3><br>
    <h2>Boite de vitesse : </h2><h3><?php if ($voiture->getBoiteAutomatique() == 1) {
        echo("Boite automatique");
    }else{
        echo("Boite manuelle");
    }
    ?></h3>

    <a href="index.php?controller=default&action=home">go home</a>
</body>