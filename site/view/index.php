<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="author" content="Fahima Mokhtari">
<meta name="description" content="Un site qui a pour pour but de regrouper les chercheurs dans les différents domaines">
<meta name="keywords" content="construction,materiel,building,coonstruire">
<title>Collaboration Chercheurs</title>
<script src="../../js/javascript.js" type="text/javascript"></script>
<link rel="stylesheet" href="../../css/style1.css"/>
</head>
<body>
<div id="total">
<?php include("header.php"); ?>

<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">
  
  <!-- Modal content -->
  <div class="modal-content" id="contenu">
  <h2 class="window" id="auth">Authentification</h2><br><br>
    <span class="close">&times;</span>
    <form method="post" action="site\Controller\loginC.php" id="forme">
	<label id="usr">Nom d'utilisateur:</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="username" required="true"/><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Mot de passe:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="password" name="pwd" required="true"/><br><br>
	<input type="submit" value="Connexion" name="inscr" id="connex"/><br><br><br><br><br>
	<a href="inscription.php" id="lieninscr" style="text-align:center;">Vous n'êtes pas encore inscris?Inscrivez-vous</a><br>
	</form>
  </div>

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
</div>
<h1>ScTech</h1>
<p>ScTech est une site qui facilite la collaboration entre les chercheurs de plusieurs pays et dans plusieurs domaines. </p>
<p>ScTech donne la possibilité au différents chercheurs d'échanger les informations entre eux. </p>
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
<a href="news.php"><img src="../../img/scientifique.png" title="TECH1" alt="TECH1" width="90%" height="100" style="margin-left:-20px;"/>
<span class="para">SCIENCE ET TECHNOLOGIE</span>
</a>
<a href="news.php"><img src="../../img/sc1.png" title="TECH2" alt="TECH2" width="90%" height="100"/>
<span class="para" >NEWS2</span>
</a>
<a href="news.php"><img src="../../img/sc2.png" title="TECH3" alt="TECH3" width="90%" height="100"/>
<span class="para">NEWS3</span>
</a>
<a href="news.php"><img src="../../img/sc3.png" title="TECH4" alt="TECH4" width="90%" height="100"/>
<span class="para">NEWS4</span>
</a>
</div>
</div>
<ul id="titrenews">
<li><a href="#">Debut news1</a>Neurologie mai <a href="site\view\news.php">Plus</a></li>
<li><a href="#">Debut news2</a>Astrophysique<a href="site\view\news.php">Plus</a></li>
<li><a href="#">Debut news3</a>Nucléaire<a href="site\view\news.php">Plus</a></li>
<li><a href="#">Debut news4</a>Sécurité<a href="site\view\news.php">Plus</a></li>
<li><a href="#">Debut news4</a>Cyber sec<a href="site\view\news.php">Plus</a></li>
Voir plus d'infos: <a href="site\view\page1.php">1</a>,<a href="#page1">2</a>,<a href="#page1">3</a>,<a href="#page1">4</a>,<a href="#page1">5</a>
</ul>
<?php include("footer.php"); ?>
</div>


</body>
</html>
