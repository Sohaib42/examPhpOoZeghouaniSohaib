<?php
require 'include.php';

if (empty($_GET)) {
    header('Location: index.php?controller=default&action=home');
}
if ($_GET['controller'] === 'default' && $_GET['action'] === 'home') {
    $voitureController = new DefaultController();
    $voitureController->home();
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'addForm') {
    $voitureController = new carController();
    $voitureController->addForm();
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'addVoiture') {
    $voitureController = new carController();
    $voitureController->persistForm();
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $voitureController = new carController();
    $voitureController->delete($_GET['id']);
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'updateForm' && isset($_GET['id'])) {
    $voitureController = new carController();
    $voitureController->updateForm($_GET['id']);
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'updateVoiture' && isset($_GET['id'])) {
    $voitureController = new carController();
    $voitureController->updateVoiture($_GET['id']);
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'displayOne' && isset($_GET['id'])) {
    $voitureController = new carController();
    $voitureController->displayOne($_GET['id']);
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'list' ) {
    $voitureController = new carController();
    $voitureController->listVoiture();
}
else {
    throw new Exception('La page demandée n\'existe pas', 404);
}
?>