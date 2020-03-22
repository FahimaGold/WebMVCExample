<!DOCTYPE html>
<?php  include("../Controller/chercheur.php");?>
<html>
<head>
<meta charset="UTF-8" />
<meta name="author" content="Fahima Mokhtari">
<meta name="description" content="Un site qui a pour pour but de regrouper les chercheurs dans les différents domaines">
<meta name="keywords" content="construction,materiel,building,coonstruire">
<title>Collaboration Chercheurs</title>
<script src="../../js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../../js/javascript.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/style1.css"/>
</head>
<body>
<div id="total">
<img src="../../img/header.png" height="170" width="100%" style="float:right;"/>
<?php $ctr=new Controller();
$var=$ctr->image_supprime();
foreach($var as $row)
{
	$sup=$row['supprime'];
	$nom=$row['url'];
}
if($sup==0)
	echo "<img id ='logo' src='../../img/".$nom."' />";
else if(isset($_POST['submit'])){
$d=$_GET['url']; if($d!="")echo "<img id ='logo' src='../../img/".$d."' />"; }?>
<div id="menupr">
<a href="../../index.php">Accueil</a>
<a href="..\..\site\view\chercheurs.php">Chercheurs</a>
<a href="..\..\site\view\publications.php">Publications</a>
<a href="..\..\site\view\journaux.php">Journaux</a>
<a href="..\..\site\view\conferences.php">Conférences</a>
<a href="..\..\site\view\contact.php">Contact</a>
<a href="index.php" id="Btn" style="margin-left:23%;"><i class="genericon genericon-user"></i><?php if(isset($_GET['Btn'])) {session_destroy();header("location:index.php");}?>Se déconnecter</a>
</div>

<div id="admin">
 <form method="post" action="../../upload.php" enctype="multipart/form-data">
	<input type="file" id="chglogo" name="fileToUpload" value="changer logo"/>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit" value="valider"/>
	<br><br>
	</form>
	<form method="post" action="">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Couleur de fond:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="color" name="couleurfond" style="width:100px;height:30px;"/><br><br>
	<input type="submit" name="validercfond" style="width:100px;height:30px;" value="valider couleur"/><br><br>
	 <?php
	
	$ctr = new Controller();
	 $b=$ctr->changer_fond();
	 ?>

	<script type="text/javascript">
                        document.body.style.backgroundColor = <?php echo json_encode (get_color());
						 function get_color(){
						$ct =  new Controller();
	                    $res = $ct->get_fond();
	                    foreach($res as $row)
	                    {
	                 	$bk = $row['background'];
	                     }
	                    return $bk;
	                         }
						?>
                    </script>
	</form>
	<form method="post" action="">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Couleur du menu principal:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="color" name="couleurmenu" style="width:100px;height:30px;"/><br><br>
	<input type="submit" name="validermenu" style="width:100px;height:30px;" value="valider couleur menu"/><br><br>
	<?php
	
	$ctr = new Controller();
	 $b=$ctr->changer_menu();
	 ?>
	</form>
	<a href="ajouterEvent.php">Ajouter event</a> <br>
	<a href="ajouterNews.php">Ajouter news</a> <br>
	<a href="users.php">Afficher utilisateur</a> <br>
</div>

<div id="event">
<h1>Evéments</h1>

<?php $ctr=new Controller();
echo '<ul id="listevent">';
$t=$ctr->get_event();
foreach($t as $row)
{
	echo '<li>'.'<a href="#event1">'.$row['titre'].'</a>'.'&nbsp'.$row['date_event'].'<a href="site\view\news.php">'.'</a>'.'</li>';
}
echo '</u>';
?>

</ul>
</div>
<h1>ScTech</h1>
<p>ScTech est une site qui facilite la collaboration entre les chercheurs de plusieurs pays et dans plusieurs domaines. </p>
<p>ScTech donne la possibilités au différents chercheurs d'échanger les informations entre eux. </p>
<p>ScTech est une site qui facilite la collaboration entre les chercheurs de plusieurs pays et dans plusieurs domaines. </p>
<h1>Nos objectifs</h1>
<ul style="list-style-type:none;">
<li>-Encourager les recherches scientifiqes.</li>
<li>-Faciliter le partage de l'information.</li>
<li>-Informer le monde des dernières découvertes.</li>
<li>-Mettre le monde au courant des différents événements et conférences.</li>
</ul>
<h1>News</h1><br><br><br><br><br><br><br><br>
<div class="diaporama">
<div class="fix">
<a href="..\..\site\view\news.php"><img src="../../img/scientifique.png" title="TECH1" alt="TECH1" width="90%" height="100" style="margin-left:-20px;"/>
<span class="para">SCIENCE ET TECHNOLOGIE</span>
</a>
<a href="..\..\site\view\news.php"><img src="../../img/sc1.png" title="TECH2" alt="TECH2" width="90%" height="100"/>
<span class="para" >NEWS2</span>
</a>
<a href="..\..\site\view\news.php"><img src=".././img/sc2.png" title="TECH3" alt="TECH3" width="90%" height="100"/>
<span class="para">NEWS3</span>
</a>
<a href="..\..\site\view\news.php"><img src="../../img/sc3.png" title="TECH4" alt="TECH4" width="90%" height="100"/>
<span class="para">NEWS4</span>
</a>
</div>
</div>
<?php 
echo '<ul id="titrenews">';
$ctr = new Controller();
$v = $ctr->get_news();
foreach($v as $row) {
echo '<li>'.'<a href="#">'.$row['titre'].'</a>'.$row['debut'].'<a href="..\..\site\view\news.php">'.'Plus'.'</a>'.'</li>';
}
echo '</ul>';
?>

<?php include("../../site/view/footer.php"); ?>
</div>


</body>
</html>
