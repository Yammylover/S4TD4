<?php
//$prenom=readline("Saisir un prénom : \n");

/* Première version
if(strlen($prenom)==0){
	echo "Bonjour Anonyme!\n";
	
} else {
	echo "Bonjour $prenom!\n" ;
}*/

/*deuxième version
while(strlen($prenom)==0){
	$prenom=readline("Tell me your name, a word I may devour     \n");
}
*/
do{
	$prenom=readline("Saisir un prénom : \n");
}while(strlen($prenom)==0);

echo "Bonjour $prenom\n"

?>
