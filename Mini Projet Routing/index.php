<!--Dans index.php, vérifiez la valeur de $_GET["route"].-->
<!--Si $_GET["route"] est vide ou n'existe pas : Faites un require de home.phtml.-->
<!--Si $_GET["route"] est égal à "about" : Faites un require de about.phtml.-->
<!--Si $_GET["route"] est égal à "contact" : Faites un require de contact.phtml.-->
<!--Testez en utilisant la barre d'URL de votre navigateur.-->

<?php 
if ($_GET["route"]===""){
    require 'home.phtml';
}
elseif ($_GET["route"]==="about"){
    require 'about.phtml';
}
elseif ($_GET["route"]==="contact"){
    require 'contact.phtml';
}
else{
    echo "Raté !";
} 
?>

