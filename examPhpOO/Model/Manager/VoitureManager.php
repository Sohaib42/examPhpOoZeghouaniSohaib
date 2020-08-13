<?php
    class VoitureManager extends DbManager {
        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $voitures = [];
            $sql =  'SELECT * FROM voitures';

            foreach  ($this->bdd->query($sql) as $row) {
                $voitures[] = new Voiture($row['id'], $row['marque'], $row['modele'], $row['energie'], $row['boiteautomatique']);
            }


            return $voitures;
        }

        public function insert(Voiture $voiture)
        {
            $marque = $voiture->getMarque();
            $modele = $voiture->getModele();
            $energie = $voiture->getEnergie();
            $boiteautomatique = $voiture->getBoiteAutomatique();
            $requete = $this->bdd->prepare("INSERT INTO voitures (marque,modele,energie,boiteautomatique) VALUES (?,?,?,?)");
            $requete->bindParam(1, $marque);
            $requete->bindParam(2, $modele);
            $requete->bindParam(3, $energie);
            $requete->bindParam(4, $boiteautomatique);
            $requete->execute();
            $voiture->setId($this->bdd->lastInsertId());
        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM voitures where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function select($id)
        {
            $requete = $this->bdd->prepare("SELECT * FROM voitures WHERE id= ?");
            $requete->bindParam(1, $id);
            $requete->execute();
            $res = $requete->fetch();
            $voiture = new Voiture ($res['id'],$res['marque'],$res['modele'],$res['energie'],$res['boiteautomatique']);
            return $voiture;
        }

        public function update(Voiture $voiture)
        {  
            $marque = $voiture->getMarque();
            $modele = $voiture->getModele();
            $energie = $voiture->getEnergie();
            $boiteautomatique= $voiture->getBoiteAutomatique();
            $id = $voiture->getId();
            $requete = $this->bdd->prepare("UPDATE voitures SET marque =?,modele =?,energie =?,boiteautomatique=? WHERE id =?");
            $requete->bindParam(1, $marque);
            $requete->bindParam(2, $modele);
            $requete->bindParam(3, $energie);
            $requete->bindParam(4, $boiteautomatique);
            $requete->bindParam(5, $id);
            $requete->execute();
        }

    }
?>