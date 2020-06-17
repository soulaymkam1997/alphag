<?PHP

require_once "../../../config.php";
require_once "../../../entity/fournisseur.php";


class fournisseurC{

    public function ajouterFournisseur($fournisseur){
        $db = config::getConnexion();

        $sql="INSERT INTO fournisseur(nom,contact,logo) VALUES (:nom,:contact,:logo)";
        try{

            $req=$db->prepare($sql);

            $req->bindValue(':nom',$fournisseur->getNom());
            $req->bindValue(':contact',$fournisseur->getContact());
            $req->bindValue(':logo',$fournisseur->getLogo());


            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

    }


    public function afficherFournisseurs()
    {
        $sql = "SElECT * From fournisseur";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimerFournisseur($id_fournisseur){
        $db = config::getConnexion();

        $sql="DELETE FROM fournisseur where id = :id_fournisseur";
        $req=$db->prepare($sql);

        $req->bindValue(':id_fournisseur',$id_fournisseur);
        try{

            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierFournisseur($fournisseur,$id_fournisseur)
    {
        $sql = "UPDATE fournisseur SET  nom = :nom ,contact = :contact, logo = :logo where id = :id_fournisseur";

        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':id_fournisseur', $id_fournisseur);
            $req->bindValue(':nom', $fournisseur->getNom());
            $req->bindValue(':contact', $fournisseur->getContact());
            $req->bindValue(':logo', $fournisseur->getLogo());

            $req->execute();

        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }




    }