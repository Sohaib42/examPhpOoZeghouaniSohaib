<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
    <h1>Mise à jour de la voiture <?php echo $voiture->getId();?></h1>

    <a href="../examPhpOO/index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
    </a>

    <form method="post" action="index.php?controller=voiture&action=updateVoiture&id=<?php echo $voiture->getId()?>">
        <label>Marque</label>
        <input name="marque" value="<?php echo $voiture->getMarque()?>" class="form-control">

        <label>Modele</label>
        <input name="modele" value="<?php echo $voiture->getModele()?>" class="form-control">

        <label>Energie</label>
        <select name="energie" class="form-control">
  <option value="Essence">Essence</option>
  <option value="Diesel">Diesel</option>
  <option value="Electrique">Electrique</option>
  <option value="Hybride">Hybride</option>
    </select>  
    <label>Boite automatique<label><br>
<select name="boiteautomatique" class="form-control">
    <option value="0">Non</option>
    <option value="1">Oui</option>
    <br>
</select>
<input class="btn btn-success" type="submit" value="valider">

    </form>
</div>
<?php
include 'Parts/script.html'
?>
</body>