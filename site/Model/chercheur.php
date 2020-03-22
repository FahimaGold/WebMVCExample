<?php 
include('../../config/connexion.php');
  class Modele{
	  
	 
 public function get_info_non_detaille()
   {
	   
     $dbTDW = data_base_connect();
$select = $dbTDW->query("SELECT * From chercheur");
   return $select;
   
  }
  public function get_admin($username)
  {
	  $dbTDW = data_base_connect();
	  $select = $dbTDW->query("SELECT admin From chercheur WHERE username ='$username'");
   return $select;
  }
  public function set_color($d){
	$dbTDW = data_base_connect();
    $select = $dbTDW->query("INSERT INTO page(logo,background,events) VALUES ('','$d','')");
  }
   public function get_Max()   //récupérer l'id MAX de l'image
   {  
   $max=0;
     $dbTDW = data_base_connect();
	 $select = $dbTDW->query("SELECT * FROM logo");
       foreach($select as $row)
   {
	   $var=$row['id_logo'];
	   if($var > $max)
		   $max=$var;
   }
     return $max;
   }
   public function get_derniere_image()   //Savoir quelle image est insérée dernièrement 
   {  
    $l=$this->get_Max();
     $dbTDW = data_base_connect();
	 $select = $dbTDW->query("SELECT * FROM logo WHERE id_logo = ".$l);
     return $select;
   }
    public function image_supprime()   //Savoir si une image donnée a été supprimée ou pas 
   {  
    $id=$this->get_derniere_image();
     $dbTDW = data_base_connect();
	 $select = $dbTDW->query("SELECT url,supprime FROM logo WHERE id_logo = ".$id);
     return $select;
   }
   
   public function get_event()
   {
	   $dbTDW = data_base_connect();
       $select = $dbTDW->query("SELECT * FROM event");
	   return $select;
   }
   public function ajouter_event($titre,$date,$contenu)
   {
	$dbTDW = data_base_connect();
    $select = $dbTDW->query("INSERT INTO event(titre,date_event,contenu) VALUES ('$titre','$date','$contenu')");  	
   }
   public function get_news()
   {
	   $dbTDW = data_base_connect();
       $select = $dbTDW->query("SELECT * FROM news");
	   return $select;
   }
    public function ajouter_news($titre,$debut)
   {
	$dbTDW = data_base_connect();
    $select = $dbTDW->query("INSERT INTO news(titre,debut) VALUES ('$titre','$debut')");  
 
   }
   
   public function changer_fond($couleur)    //Changer la couleur du fond
   {
	$dbTDW = data_base_connect();
    $select = $dbTDW->query("INSERT INTO page(background,events) VALUES ('$couleur','')");  
   }
   
   public function get_max_couleur()   //récupérer l'id MAX de la denrière couleur du fond insérée
   {  
   $max=0;
     $dbTDW = data_base_connect();
	 $select = $dbTDW->query("SELECT * FROM page");
       foreach($select as $row)
   {
	   $var=$row['id_table'];
	   if($var > $max)
		   $max=$var;
   }
     return $max;
   }
   
   public function get_fond()  //Récupérer la dernière couleur du fond insérée dans la table
   {
     
    $l=$this->get_max_couleur();
     $dbTDW = data_base_connect();
	 $select = $dbTDW->query("SELECT background FROM page WHERE id_table = ".$l);
     return $select;
   
   }
   /*Menu principal*/
   public function changer_menu($couleur)    //Changer la couleur du menu principal
   {
	$dbTDW = data_base_connect();
    $select = $dbTDW->query("INSERT INTO menu(couleur) VALUES ('$couleur')");  
   }
   
   public function get_max_menu()   //récupérer l'id MAX de la denrnière couleur du menu principal insérée
   {  
   $max=0;
     $dbTDW = data_base_connect();
	 $select = $dbTDW->query("SELECT * FROM menu");
       foreach($select as $row)
   {
	   $var=$row['id_menu'];
	   if($var > $max)
		   $max=$var;
   }
     return $max;
   }
   
   public function get_couleur_menu()  //Récupérer la dernière couleur du fond insérée dans la table
   {
     
    $l=$this->get_max_menu();
     $dbTDW = data_base_connect();
	 $select = $dbTDW->query("SELECT couleur FROM menu WHERE id_menu = ".$l);
     return $select;
   
   }
   
   public function get_users()   //Afficher les utilisateurs pour un admin
   {
	 $dbTDW = data_base_connect();
	 $select = $dbTDW->query("SELECT * FROM chercheur");
     return $select;
   }
   
   public function bloquer_user($username)
   {
	 $dbTDW = data_base_connect();
	 $select = $dbTDW->query("UPDATE chercheur SET bloque=1 WHERE username ='$username'");
	   
   }
  }
?>
