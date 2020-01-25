<?php
/*
if(!isset($_POST['mot'])){
   echo "Veuillez saisir un mot";
}
*/


$sens = $_POST['lang'];
var_dump($sens);

// $mot =   htmlentities (strtolower($_POST['mot']));

$library = [
    'cat' => 'chat',
    'dog' => 'chien',
    'fish' => 'poisson',
    'cow' => 'vache'
];


switch ($sens){

    case "fr-en":
        if (array_key_exists($_POST['mot'], $library)){
            $mott = array_search ($_POST['mot'],$library);
            $resultat = $mott; // Vers EN
        }
        break;

    case "en-fr":
        if(array_key_exists($_POST['mot'], $library) == true)
        {
            // Oui, récupération de la valeur, de la traduction en français.
            $translatedWord = $library[$_POST['lang']];
            $message = "Le mot ". $_POST['mot']. " se traduit par ". $translatedWord .".";
        }
        else
        {
            // Non, cet indice n'existe pas.
            $message = "Je ne connais pas le mot " .$_POST['mot']. ".";
        }
        break;


}

echo $resultat;


//array_search
//array_key_exists

