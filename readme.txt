projet ecommerce : check liste 
---------------

*cahier de charge
*conception
*creer page index 
*creer partie front 
*creer BD 
*creer connexion php mysql 
*tester connexion 
 




<?php 

// 1 - connexion vers la BD 

$servername = "localhost" ; 
$DBuser = "root" ; 
$DBpassword ="" ; 
$DBname="ecommerce" ; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
   

// 2 - creation requete select categorie 

	$req = " SELECT * FROM CATEGORIES ; " 

// 3 - execution de la requete 

	$res = $conn->query($req) ; 


// 4 - resultat de la requete 

	$categories = $res->fetchAll() ; 

var_dump($categories) ; 


?>



// arcouru liste de categorie 
foreach($categories as categorie) {
print 