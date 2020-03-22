function authen()
{
	
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}

/*function inscr()
{
	var modal = document.getElementById("Modal");
	
var lien = document.getElementById("lieninscr");
var forme = document.getElementById('forme');
var usr=  document.getElementById("usr");
lien.onclick = function() {
	document.getElementById("auth").innerHTML="Inscription";
	lien.hidden="true";
	
	var lab1 = document.createElement('label');
	lab1.innerHTML="Prénom";
	forme.insertBefore(lab1,usr);
	var champ1 = document.createElement('input');
	forme.insertBefore(champ1,usr);
	lab1.style.marginRight="60px";
	champ1.style.marginBottom="10px";
	//Nom
	var lab2 = document.createElement('label');
	lab2.innerHTML="Nom";
	forme.insertBefore(lab2,usr);
	var champ2 = document.createElement('input');
	forme.insertBefore(champ2,usr);
	lab2.style.marginRight="70px";
	champ2.style.marginBottom="10px";
	//adresse
	var lab3 = document.createElement('label');
	lab3.innerHTML="Adresse";
	forme.insertBefore(lab3,usr);
	var champ3 = document.createElement('input');
	forme.insertBefore(champ3,usr);
	lab3.style.marginRight="70px";
	champ3.style.marginBottom="10px";
	//travail
	var lab4 = document.createElement('label');
	lab4.innerHTML="Travail";
	forme.insertBefore(lab4,usr);
	var champ4 = document.createElement('input');
	forme.insertBefore(champ4,usr);
	lab4.style.marginRight="70px";
	champ4.style.marginBottom="10px";
	//grade
	var lab5 = document.createElement('label');
	lab5.innerHTML="Grade";
	forme.insertBefore(lab5,usr);
	var champ5 = document.createElement('input');
	forme.insertBefore(champ5,usr);
	lab5.style.marginRight="70px";
	champ5.style.marginBottom="10px";
	//sexe
var label  = makeRadioButton("yesbutton", "yes", "Oh yea! do it!");
 radio_home.appendChild(yes_button);
    var radio = document.createElement("input");
    radio.type = "radio";
    radio.name = name;
    radio.value = value;

    label.appendChild(radio);

    label.appendChild(document.createTextNode(text));
forme.insertBefore(label,usr);
label.style.marginRight="35px";
   document.getElementById("connex").value = "Inscription";
}

}*/


/*function fond()
{
	alert("hi!");
	var cat=<? include("../../site/Controller/chercheur.php");php $con = new  Controller(); echo $v=$con->couleur_fond(); ?>*/
	  //document.body.style.backgroundColor="red";
	 /* $(document).ready(function(){

	$("body").css({"background-color":cat});
  
});

}*/

 