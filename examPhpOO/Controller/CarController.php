<?php
class carController{
    private $carManager;

    public function __construct()
    {
        $this->carManager = new VoitureManager();
    }

    public function listVoiture(){
        $voitures = $this->carManager->selectAll();

        require 'View/Voiture_view.php';
    }

    public function displayOne($id){
        $voiture = $this->carManager->select($id);
        require 'View/detail.php';
    }

    public function addForm()
    {
        require './View/insert_form.php';
    }

    public function persistForm()
    {
        $voiture = new Voiture (null,$_POST['marque'],$_POST['modele'],$_POST['energie'],$_POST['boiteautomatique']);
        $this->carManager->insert($voiture);
        header('Location: /examPhpOO/index.php?controller=default&action=home');
    }

    public function delete($id)
    {
        $this->carManager->delete($id);
        header('Location: /examPhpOO/index.php?controller=default&action=home');
    }

    public function updateForm($id)
    {
        $voiture = $this->carManager->select($id);

        require 'View/update_form.php';
    }

    public function updateVoiture($id)
    {
        $voiture = $this->carManager->select($id);
        $voiture = new Voiture($id, $_POST['marque'], $_POST['modele'],$_POST['energie'],$_POST['boiteautomatique']);
        $this->carManager->update($voiture);
        header('Location: /examPhpOO/index.php?controller=default&action=home');
    }
}
