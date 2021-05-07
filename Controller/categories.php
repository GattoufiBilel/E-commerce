<?php



class Crud_categorie {

    private $conn ; 

    function __construct(){
        $obj = new Config(); 
        $this->conn = $obj->getConnexion(); 
    }
     
        function getAllCategories() {
            $req = "SELECT * FROM categories" ;

        // execution de la req
            $res = $this->conn->query($req) ;

        // affiche resultats
            $categories = $res->fetchAll() ;

        //var_dump($categories);

            return $categories ; 

    }
}
?>