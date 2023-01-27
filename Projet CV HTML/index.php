<?php

$formData = [
    'firstName' => '',
    'lastName' => '',
    'email' => '',
    'phone' => '',
    'linkedin' => '',
    'github' => '',
    'biographie' => '',
    'loisir_1' => '',
    'loisir_2' => '',
    'loisir_3' => '',
    'loisir_4' => '',
    'langues' => '',
    'langage' => '',
    'frameworks' => '',
    'logiciels' => '',
    'color' => ''
    ];

if (isset($_POST['nom'])){
    $formData['firstName'] = $_POST['nom'];
}
if (isset($_POST['prenom'])){
    $formData["lastName"] = $_POST['prenom'];
}
if (isset($_POST['email'])){
    $formData["email"] = $_POST['email'];
}
if (isset($_POST['telephone'])){
    $formData["phone"] = $_POST['telephone'];
}
if (isset($_POST['linkedin'])){
    $formData["linkedin"] = $_POST['linkedin'];
}
if (isset($_POST['github'])){
    $formData["github"] = $_POST['github'];
}
if (isset($_POST['biographie'])){
    $formData["biographie"] = $_POST['biographie'];
}
if (isset($_POST['loisir_1'])){
    $formData["loisir_1"] = $_POST['loisir_1'];
}
if (isset($_POST['loisir_2'])){
    $formData["loisir_2"] = $_POST['loisir_2'];
}
if (isset($_POST['loisir_3'])){
    $formData["loisir_3"] = $_POST['loisir_3'];
}
if (isset($_POST['loisir_4'])){
    $formData["loisir_4"] = $_POST['loisir_4'];
}
if (isset($_POST['langues'])){
    $formData["langues"] = $_POST['langues'];
}
if (isset($_POST['Langage_prog'])){
    $formData["langage"] = $_POST['Langage_prog'];
}
if (isset($_POST['f&l'])){
    $formData["frameworks"] = $_POST['f&l'];
}
if (isset($_POST['logiciel'])){
    $formData["logiciels"] = $_POST['logiciel'];
}
if (isset($_POST['couleur_cv'])){
    $formData["color"] = $_POST['couleur_cv'];
}

// echo "<pre>";
// var_dump($formData);
// echo "</pre>";

require 'cv.phtml';



?>