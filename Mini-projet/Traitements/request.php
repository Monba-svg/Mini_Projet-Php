<?php 
include "db.php";
function getTaches()
{
    global $pdo;
    $req = "Select * from tache ORDER BY id";
    $result= $pdo->query($req);
    return $result->fetchAll();
}

function modifTaches()
{
    global $pdo;
     

    if (isset($_GET['modifier'])) {
        $id=$_GET['modifier'];
        $req="Select * from tache where id=?";
        $stmt=$pdo->prepare($req);
        $stmt->execute([$id]);
        $tache_a_modifier= $stmt->fetch(PDO::FETCH_ASSOC);
        return $tache_a_modifier;
    }else
    {
        $tache_a_modifier=null;
    }
    
}
function totaltache()
{
    global $pdo;
    $req = "Select count(*)  from tache";
    $result=$pdo->query($req)->fetchColumn();
    return $result;

}
function endtasks()
{
    global $pdo;
    $req = "Select count(*) from tache where statut='terminée'";
    $result=$pdo->query($req)->fetchColumn();
    return $result;
}
function purcentageTasks()
{
    global $pdo;
    $req1 = "Select count(*)  from tache";
    $result1=$pdo->query($req1)->fetchColumn();
    $req2 = "Select count(*) from tache where statut='terminée'";
    $result2=$pdo->query($req2)->fetchColumn();
    $overall = ($result2/$result1) * 100;
    return $overall;
    
}
function late()
{
    global $pdo;
    $req="Select count(*) from tache where date_limite<date_creation OR statut!='terminée' ";
    $result=$pdo->query($req)->fetchColumn();
    return $result;
}
?>