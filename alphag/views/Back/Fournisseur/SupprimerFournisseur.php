<?php
include "../../../entity/fournisseur.php";
include "../../../core/fournisseurC.php";


if($_SERVER['REQUEST_METHOD']=='GET') {
    {
        if (isset($_GET['id']) ) {

            $Fc = new fournisseurC();
            $Fc->supprimerFournisseur($_GET['id']);
            header("Location: AfficherFournisseur.php");
        }
    }

}



