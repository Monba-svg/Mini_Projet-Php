<?php 
$dossierPublic="http://localhost/Mini-projet/Public/";
include_once ("Includes/header.php");
include_once ("Includes/navbar.php");
include_once ("Includes/sidebar.php");
require_once("Traitements/request.php");

$taches = getTaches();
$tache_a_modifier= modifTaches();
$total=totaltache();
$end=endtasks();
$purcent=purcentageTasks();
$late=late();

$page=isset($_GET['page']) ? $_GET['page'] : 'Accueil';
if(file_exists("Pages/$page.php"))
    {
        include ("Pages/$page.php");
    }else
    {
        include_once ("Pages/Erreur404.php");
    }


include_once ("Includes/footer.php");
?>