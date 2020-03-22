<?php
include("config/connexion.php");

$target_dir = "C:/wamp/www/Projet web/img/";  //Choisir là où le logo sera placé
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);  //Récupérer le chemin de l'image téléchargée
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);  //Récupérer l'extension de l'image
// Vérifier si l'image téléchargée est originale
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);  //Récupérer la taille de l'image téléchargée
    if($check !== false) {
       
	   
		
        $uploadOk = 1;
    } else {
        echo "Vous deverez télécharger une image.";
        $uploadOk = 0;
    }

}*/
// Vérifier si le fichier existe déjà
if (file_exists($target_file)) {
    echo "Cette image existe déjà!";
    $uploadOk = 0;
}
else{
	$t=$url =basename( $_FILES["fileToUpload"]["name"]);
	$dbTDW = data_base_connect();
    $select = $dbTDW->query("INSERT INTO logo(url,supprime) VALUES ('$t',0)");
}
// Controller la taille du fichier téléchargé
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Veuillez selectionner une image d'une taille plus petite.";
    $uploadOk = 0;
}
// limité les formats permises
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Uniquement les formats JPG, JPEG, PNG & GIF files qui sont permises.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Oups! Votre image n'a pas pu être  téléchargée!.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$url =basename( $_FILES["fileToUpload"]["name"]);
		$base = 'http://localhost/Projet%20web/site/view/admin.php';
$data = array(
    'url' => $url,
);

$info = $base . '?' . http_build_query($data);
header("Location: $info");
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		//"<img  id='logo' src='../../img/>"
		
		echo $url;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


?>