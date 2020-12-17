<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="GET"  action="#">
    <fieldset>
        <legend>Formulaire d'inscription </legend>
        <table border="0">
            <tr>
                <td>  Nom </td>
                <td> <input type="text" name="txtnom" placeholder="saisir votre nom"></td>
            </tr>
            <tr>
                <td>  Prenom </td>
                <td> <input type="text" name="txtprenom"placeholder="saisir votre prenom"></td>
            </tr>
            <tr>
                <td>  Email </td>
                <td>  <input type="email" name="txtemail" placeholder="saisir votre email"></td>
            </tr>
            <tr>
                <td>  Sexes </td>
                <td>  <input type="radio" name="rad"  >masculin <input type="radio" name="rad"  >feminin </td>
            </tr>
            <tr>
                <td>  Pays </td>
                <td>  <select name="op">
                        <option >--faites votre choix--</option>
                        <option >France</option>
                        <option >maroc</option>
                        <option >tunisie</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>  Les languages preferé </td>
                <td>  <select name="lang" size="4" multiple>

                        <option>Java</option>
                        <option>C</option>
                        <option>C++</option>
                        <option>PHP</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>  Domaine d'activité </td>
                <td>  <input type="checkbox"  name="check">informatique
                    <input type="checkbox"  name="check">gestion
                    <input type="checkbox"  name="check">pedagogie
                </td>
            </tr>
        </table>
        <input type="submit" name="btn" value="envoyer">

        <input type="submit" value="annuler">





    </fieldset>
</form>
</body>
</html>
<?php

if (isset($_GET['btn']))
{
    $nom=$_GET['txtnom'];
    $prenom=$_GET['txtprenom'];
    $email=$_GET['txtemail'];
    $sexe=$_GET['rad'];
    $pays=$_GET['op'];
    $lang=$_GET['lang'];
    $da=$_GET['check'];


}
if (isset($_POST['btn']))
{
    $nom=$_POST['txtnom'];
    $prenom=$_POST['txtprenom'];
    $email=$_POST['txtemail'];
    $sexe=$_POST['rad'];
    $pays=$_POST['op'];
    $lang=$_POST['lang'];
    $da=$_POST['check'];
    echo "bonjour vous etes:$nom $prenom, votre email est:$email,votre sexe:$sexe,votre pays:$pays,votre language choisie:$lang,votre domaine d'activite:$da";

}