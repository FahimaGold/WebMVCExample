<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="author" content="Fahima Mokhtari">
<meta name="description" content="Un site qui a pour pour but de regrouper les chercheurs dans les différents domaines">
<meta name="keywords" content="construction,materiel,building,coonstruire">
<title>Collaboration Chercheurs</title>
<link rel="stylesheet" href="css/style1.css"/>
<script src="js/javascript.js" type="text/javascript"></script>
</head>
<body>
<div id="total">
<?php include("header.php"); ?>

<?php
$controller = new Controller();
   $res= $controller->get_info_chercheur();
   foreach($res as $row)
   {
	   echo $row['nom'].'<br>';
	   echo $row['prenom'].'<br>';
	   echo $row['biographie'].'<br>';
	   echo $row['structure_affiliation'].'<br>
	   ';
	  
   }
   $usr="fahima@2017";
     $r=$controller->get_admin($usr);
   
    foreach($r as $row)
   {
	   $var=$row['admin'].'<br>';
	   echo '<br>'."_____________________".$row['admin'].'<br>';
     if($var==1)
		 echo"Admin";
	 
	     
   }

     $rp=$controller->get_derniere_image();
   
    foreach($rp as $row)
   {
	   $row['id_logo'].'<br>';
	    $row['url'].'<br>';
		 $var=$row['supprime'].'<br>'; 
	   echo '<br>'."_____________________".$row['url'].'<br>';
     if($var==0)
		 echo"toujours utilisé!";
	 
	     
   }
 
   //echo $var;
   ?>
<?php include("footer.php"); ?>
</div>
</body>
</html>
