<?php 

include('../../config/connexion.php');

		$user = $_POST["username"];
		$password = $_POST["pwd"];
		$mail = $_POST["mail"];
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$sexe = $_POST["sexe"];
		$adress = $_POST["addresse"];
		$travail = $_POST["travail"];
		$grade = $_POST["grade"];
		$structure_affiliation = $_POST["affiliation"];
		$biographie = $_POST["biographie"];
		$them_recherche = $_POST["recherche"];
		$cv = $_POST["cv"];
	    $pays = $_POST["pays"];
		$continent = $_POST["continent"];
	//	$repassword = $_POST["repassword"];

		$psw =$password;
$dbTDW = data_base_connect();

$insert = $dbTDW->prepare("INSERT INTO chercheur(username,mail,password,nom,prenom,
sexe,adress,travail,grade,structure_affiliation,biographie,them_recherche,cv,pays,continent) VaLUES (:user,:mail,:pwd,:nom,:prenom,:sexe,:adress,:travail,:grade,:structure_affiliation,:biographie,:them_recherche,:cv,:pays,:continent)");
 // data binding 
	$insert->bindParam(':user',$user);
	$insert->bindParam(':mail',$mail);
	$insert->bindParam(':pwd',$psw);
	$insert->bindParam(':nom',$nom);
	$insert->bindParam(':prenom',$prenom);
	$insert->bindParam(':sexe',$sexe);
	$insert->bindParam(':adress',$adress);
	$insert->bindParam(':travail',$travail);
	$insert->bindParam(':grade',$grade);
	$insert->bindParam(':structure_affiliation',$structure_affiliation);
	$insert->bindParam(':biographie',$biographie);
	$insert->bindParam(':them_recherche',$them_recherche);
	$insert->bindParam(':cv',$cv);
	$insert->bindParam(':pays',$pays);
	$insert->bindParam(':continent',$continent);
    try {    
    
    	$insert->execute();
    echo "produit Inséré Avec succés ";
        
    }catch (Exception $e) {
        exit($e ->getMessage());	
    }
?>