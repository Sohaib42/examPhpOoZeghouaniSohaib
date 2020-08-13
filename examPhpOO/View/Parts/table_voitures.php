    
<a href="../examPhpOO/index.php?controller=voiture&action=addForm">
    <button style="margin-bottom:10px;" class="btn btn-success">Ajouter une voiture dans le garage</button>
</a>
<table class="table">
    <thead>
    <td>Identifiant</td>
    <td>Marque</td>
    <td>Modele</td>
    <td>Energie</td>
    <td>Type de boite de vitesse</td>
    <td>Action</td>
    </thead>

    <tbody>
    <?php
    foreach ($voitures as $car) {
        ?>
    <tr>
        <td><?php echo $car->getId()?></td>
        <td><?php echo $car->getMarque()?></td>
        <td><?php echo $car->getModele()?></td>
        <td><?php echo $car->getEnergie()?></td>
        <td> <?php if($car->getBoiteAutomatique() == 1 ){
            echo("Boite automatique");
        }
        else{ echo('Boite Manuelle');
        }
        ?>
        </td>
        <td>
            <a href="index.php?controller=voiture&action=delete&id=<?php echo $car->getId()?>">Supprimer</a><hr>
            <a href="index.php?controller=voiture&action=updateForm&id=<?php echo $car->getId()?>">Modifier</a><hr>
            <a href="index.php?controller=voiture&action=displayOne&id=<?php echo($car->getId());?>">Afficher la voiture n° <?php echo($car->getId());?></a>
        </td>
    </tr>
        <?php
    }
    ?>
    </tbody>
</table>