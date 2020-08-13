<?php
class Voiture {
        private $id;
        private $marque;
        private $modele;
        private $energie;
        private $boiteautomatique;

public function getId(){
    return $this->id;
}

public function setId($id): void
{
    $this->id = $id;
}
public function getMarque(){
    return $this->marque;
}
public function setMarque($marque):void{
 $this->marque = $marque;
}
public function getModele(){
    return $this->modele;
}
public function setModele($modele):void{
    $this->modele = $modele;
}
public function getEnergie(){
    return $this->energie;
}
public function setEnergie($energie):void{
    $this->energie = $energie;
}
public function getBoiteAutomatique(){
    return $this->boiteautomatique;
}
public function setBoiteAutomatique($boiteautomatique){
    $this->boiteautomatique = $boiteautomatique;
}
public function __construct($id = null,$marque,$modele,$energie,$boiteautomatique)
{
  $this->id = $id;
  $this->marque = $marque;
  $this->modele = $modele;
  $this->energie = $energie;
  $this->boiteautomatique = $boiteautomatique;
}
}
