<?php
session_start();
if (empty($_SESSION['utilisateur']))
    header('Location:' . URL . 'login');


$t = 'Création d\'offre';

require_once('views/viewCreateOffer.php');
