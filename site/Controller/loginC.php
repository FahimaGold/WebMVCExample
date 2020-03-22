<?php
include("..\Controller\chercheur.php");
if (isset($_GET['inscr'])){
	
							session_start();

	session_destroy();
	/*header('Location: ../index.php');*/
}
include('../../config/connexion.php');
	$db = data_base_connect();
	$connexion=0;
	if(isset($_POST['inscr'])){
		
		$req =$db->prepare("SELECT id_user,password,username from chercheur");
		$req->execute();
			while ($res = $req->fetch()) {
				if(($_POST['pwd']==$res['password'])&&($res['username']==$_POST["username"]))
				{
					session_start();
					$_SESSION['username'] = $res['username'];
					$_SESSION['id_user'] = $res['id_user'];
					
					$connexion=1;
					echo "Bienvenue!";
				}
				# code...
				$controller = new Controller();
				 $r=$controller->get_admin($_POST["username"]);
           
                foreach($r as $row)
                {
	              $var=$row['admin'].'<br>';
	             if($var==1)
					 header("location:../../site/view/admin.php");
				 else
					header('Location: ../../site/view/profil.php'); 

	     
                }
			}
			if ($connexion==0) {
				echo "user non enregistré ";
				# code...
			}
	}
?>
