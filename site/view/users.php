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
  
	<?php
	echo '<form>';
echo $sel="<select name='userb' style='width:260px;position:relative;left:0px'required='true'>";
	
	$ctr = new Controller();
      $res= $ctr->get_users();
	  foreach($res as $row) 
	  {
		  $usr=$row['username'];
		  echo "<option value='". $usr. "'>". $usr."</option>";
	  }
	  echo "</select>";
	  echo "<input type='submit' name='bloqeruser' value='bloquer'/>";
	  echo "</form>";
	?>
	
	<br><br>

<?php include("footer.php"); ?>
</div>
</body>
</html>
