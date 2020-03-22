<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="author" content="Fahima Mokhtari">
<meta name="description" content="Un site qui a pour pour but de regrouper les chercheurs dans les différents domaines">
<meta name="keywords" content="construction,materiel,building,coonstruire">
<title>Collaboration Chercheurs</title>
<link rel="stylesheet" href="css/style1.css"/>
<script src="js/javascript.js" type="text/javascrip"></script>
</head>
<body>
<div id="total">
<?php include("header.php"); ?>
<form method="post" action="">
<label>Titre:</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="titreNews" required="true"/><br><br>
<label >Debut:</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="debutNews" required="true"/><br><br>
	<input type="submit" name="adNe" value="ajouter news"/>
	<?php $ctr = new Controller();
       $ctr->ajouter_news();
	?>
	<br><br>
</form>
<?php include("footer.php"); ?>
</div>
</body>
</html>
