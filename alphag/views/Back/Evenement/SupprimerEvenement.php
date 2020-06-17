<?php
include "../../../entity/evenement.php";
include "../../../core/evenementC.php";


if($_SERVER['REQUEST_METHOD']=='GET') {
    {
        if (isset($_GET['id']) ) {

            $Ec = new evenementC();
            $Ec->supprimerEvenement($_GET['id']);
            header("Location: AfficherEvenement.php");
        }
    }

}



