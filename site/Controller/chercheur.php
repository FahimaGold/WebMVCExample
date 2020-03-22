<?php
include("../Model/chercheur.php");
class Controller {
	private $modele ;
	public function __Construct(){
		$this->modele  = new Modele();
	}
	
	public function get_info_chercheur()   //Récupérer les informations d'un chercheur
	{
		$res=$this->modele->get_info_non_detaille();
		return $res;
	}
	
	public function get_admin($username)  //Pour savoir si un utilisateur est un admin ou pas
	{
		$r=$this->modele->get_admin($username);
		return $r;
	}
	
	public function get_derniere_image() //Récupérer le dernier logo inséré
	{
		$r=$this->modele->get_derniere_image();
		return $r;
	}
	public function couleur_fond(){
		if(isset($_POST['submitc']))
		{
			$c=$_POST['couleurfond'];
			$bg[]=array('fond'=>$c);
			$fond['bg']=json_encode($bg);
			return $fond;
		}
	}
	
	 public function image_supprime()   //Savoir si une image donnée a été supprimée ou pas 
   {  
    
    $r=$this->modele->get_derniere_image();
     return $r;
   }
   
   public function get_event()
   {
	   $r=$this->modele->get_event();
     return $r;
   }
   
   public function ajouter_event()
   {
	   if(isset($_POST['adEv']))
	   {
		   $titre = $_POST['titreEvent'];
		   $date = $_POST['dateEvent'];
		   $contenu = $_POST['contenuEvent'];
		   $r=$this->modele->ajouter_event($titre,$date,$contenu);
	   }
   }
   public function get_news()   //Récupérer les news
   {
	   $r=$this->modele->get_news();
     return $r;
   }
   
   public function ajouter_news()
   {
	   if(isset($_POST['adNe']))
	   {
		   $titre = $_POST['titreNews'];
		   $debut = $_POST['debutNews'];
		   $r=$this->modele->ajouter_news($titre,$debut);
	   }
   }
   
    public function changer_fond()   //récupérer la couleur introduite par l'admin et l'insérer dans la BDD
   {
	   if(isset($_POST['validercfond']))
	   {
		   $couleur = $_POST['couleurfond'];
		   $r=$this->modele->changer_fond($couleur);
	   }
   }
   
    public function get_fond()   //Récupérer la denière couleur insérée par l'admin 
   {  
     $r=$this->modele->get_fond();
     return $r;
   }
   
   /*Menu principal*/
   
   public function changer_menu()
   {
	  if(isset($_POST['validermenu']))
	   {
		   $couleur = $_POST['couleurmenu'];
		   $r=$this->modele->changer_menu($couleur);
	   } 
   }
   public function get_couleur_menu()   //Récupérer la denière couleur du menu insérée par l'admin 
   {  
     $r=$this->modele->get_couleur_menu();
     return $r;
   }
   
   /*Afficher les utilisateurs*/
   public function get_users()
   {
	 $r=$this->modele->get_users();
     return $r;
   }
   public function bloquer_user()
   {
	   if(isset($_POST['bloqeruser'])){
	   $user = $_POST['userb'];
	 $r=$this->modele->bloquer_user($user);
	   }
   }
}
  ?>
