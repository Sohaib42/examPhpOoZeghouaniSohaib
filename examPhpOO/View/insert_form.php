<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
<h1>Ajout d'une nouvelle voiture</h1>

    <a href="../examPhpOO/index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
    </a>

<form method="post" action="index.php?controller=voiture&action=addVoiture">
<label>Marque</label>
<input name="marque" class="form-control">

<label>Modele</label>
<input name="modele" class="form-control">

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
</select>
<br>
<input class="btn btn-success" type="submit" value="valider">

</form>
</div>
<?php
 include 'Parts/script.html'
?>
</body>