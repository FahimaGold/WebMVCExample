<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="author" content="Fahima Mokhtari">
<meta name="description" content="Un site qui a pour pour but de regrouper les chercheurs dans les différents domaines">
<meta name="keywords" content="construction,materiel,building,coonstruire">
<title>Collaboration Chercheurs</title>
<link rel="stylesheet" href="../../css/style1.css"/>
<script src="../../js/javascript.js" type="text/javascrip"></script>
</head>
<body>
<img src="../../img/header.png" height="170" width="100%" style="float:right;"/>
<?php include("../Controller/chercheur.php"); $ctr=new Controller();
$var=$ctr->image_supprime();
foreach($var as $row)
{
	$sup=$row['supprime'];
	$nom=$row['url'];
}
if($sup==0)
	echo "<img id ='logo' src='../../img/".$nom."' />";
?>
<div id="menupr">
<a href="index.php">Accueil</a>
<a href="chercheurs.php">Chercheurs</a>
<a href="publications.php">Publications</a>
<a href="journaux.php">Journaux</a>
<a href="conferences.php">Conférences</a>
<a href="contact.php">Contact</a>
<a href="admin.php" id="myBtn" style="margin-left:25%;" onclick="authen();"><i class="genericon genericon-user"></i>Se Connecter</a>
<script type="text/javascript">
	                    var m = document.getElementById("menupr");
                        m.style.backgroundColor = <?php echo json_encode (get_col());
						 function get_col(){
						$ct =  new Controller();
	                    $res = $ct->get_couleur_menu();
	                    foreach($res as $row)
	                    {
	                 	$bk = $row['couleur'];
	                     }
	                    return $bk;
	                         }
						?>
                    </script>
</div>
</body>
</html>
