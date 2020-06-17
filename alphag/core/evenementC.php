<?PHP

require_once "../../../config.php";
require_once "../../../entity/evenement.php";


class evenementC{

    public function ajouterEvenement($evenement){
        $db = config::getConnexion();

        $sql="INSERT INTO evenement(nom,article,photo) VALUES (:nom,:article,:photo)";
        try{

            $req=$db->prepare($sql);

            $req->bindValue(':nom',$evenement->getNom());
            $req->bindValue(':article',$evenement->getArticle());
            $req->bindValue(':photo',$evenement->getPhoto());


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }


    public function afficherEvenement()
    {
        $sql = "SElECT * From evenement";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimerEvenement($id_evenement){
        $db = config::getConnexion();

        $sql="DELETE FROM evenement where id = :id_evenement";
        $req=$db->prepare($sql);

        $req->bindValue(':id_evenement',$id_evenement);
        try{

            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierEvenement($evenement,$id_evenement)
    {
        $sql = "UPDATE evenement SET  nom = :nom ,article = :article, photo = :photo where id = :id_evenement";

        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':id_evenement', $id_evenement);
            $req->bindValue(':nom', $evenement->getNom());
            $req->bindValue(':article', $evenement->getArticle());
            $req->bindValue(':photo', $evenement->getPhoto());

            $req->execute();

        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }




    }