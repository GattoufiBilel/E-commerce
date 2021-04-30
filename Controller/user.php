<?php
// fonction users 

function AddVisiteur($data){

//Connextion vers BD
    $conn = getConnextion();
// requete insert to table visiteurs 
    $req = "INSERT INTO visiteurs 
    (id,nom,prenom,email,mp,telephone) 
        VALUES 
    ('".$data['nom']."', '".$data['prenom']."', '".$data['email']."', '".$data['mp']."', '".$data['telephone']."') ";


    $res = $conn->query($req);


return $res ; 

}

?>

