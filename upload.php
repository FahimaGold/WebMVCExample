<?php
include("config/connexion.php");

$target_dir = "C:/wamp/www/Projet web/img/";  //Choisir l� o� le logo sera plac�
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);  //R�cup�rer le chemin de l'image t�l�charg�e
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);  //R�cup�rer l'extension de l'image
// V�rifier si l'image t�l�charg�e est originale
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);  //R�cup�rer la taille de l'image t�l�charg�e
    if($check !== false) {
       
	   
		
        $uploadOk = 1;
    } else {
        echo "Vous deverez t�l�charger une image.";
        $uploadOk = 0;
    }

}*/
// V�rifier si le fichier existe d�j�
if (file_exists($target_file)) {
    echo "Cette image existe d�j�!";
    $uploadOk = 0;
}
else{
	$t=$url =basename( $_FILES["fileToUpload"]["name"]);
	$dbTDW = data_base_connect();
    $select = $dbTDW->query("INSERT INTO logo(url,supprime) VALUES ('$t',0)");
}
// Controller la taille du fichier t�l�charg�
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Veuillez selectionner une image d'une taille plus petite.";
    $uploadOk = 0;
}
// limit� les formats permises
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Uniquement les formats JPG, JPEG, PNG & GIF files qui sont permises.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Oups! Votre image n'a pas pu �tre  t�l�charg�e!.";
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