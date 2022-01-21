<?php

$regexPhoneNumber = '/^[0]{1}[1-79]{1}([ ]{1}[0-9]{2}){4}$/';
$formErrors = [];
// on vérifie le champs Nom

if (count($_POST) > 0) {

    if (isset($_POST["first_name"]) && !empty($_POST["first_name"])) {

        $firstName = strip_tags($_POST["first_name"]);
    }

    if (isset($_POST["last_name"]) && !empty($_POST["last_name"])) {

        $lastName = strip_tags($_POST["last_name"]);
    }

    if (isset($_POST["email"]) && !empty($_POST["email"])) { 

        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST["email"];
            
        } else {
            $formErrors["email"] = "Veuillez renseigner un email valide";
        } 
    
    }

    if (isset($_POST["phoneNumber"]) && !empty($_POST['phoneNumber'])) {
        if (filter_var($_POST['phoneNumber'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $regexPhoneNumber)))) {
            $phoneNumber = strip_tags($_POST["phoneNumber"]);
        } else {
            $formErrors['phoneNumber'] = 'Le numéro de téléphone doit être au format 06 07 08 09 10';
        }
    } else {
        $formErrors['phoneNumber'] = 'Le numéro de téléphone est obligatoire';
    }

    if (!empty($_POST['gender'])) {
        if ($_POST['gender'] == 'Exposant' || $_POST['gender'] == 'Visiteur') {
            $gender = $_POST['gender'];
        } else {
            $formErrors['gender'] = 'le genre est invalide veuillez choisir dans la liste';
        }
    } else {
        $formErrors['gender'] = 'Le genre est vide.';
    }
    if ($_POST["gender"] == 'Exposant') {
        if (!empty($_POST['category'])) {
            if ($_POST['category'] == 'Concept' || $_POST['category'] == 'newModel' || $_POST['category'] == 'Custom') {
                $category = $_POST['category'];
            } else {
                $formErrors['category'] = 'La catégorie est invalide veuillez choisir dans la liste';
            }
        } else {
            $formErrors['category'] = 'La catégorie est vide.';
        }
    }

    if (!empty($_POST['day'])) {
        if ($_POST['day'] == '1Day' || $_POST['day'] == '2Day') {
            $day = $_POST['day'];
        } else {
            $formErrors['day'] = 'La durée est invalide veuillez choisir dans la liste';
        }
    } else {
        $formErrors['day'] = 'La durée est vide.';
    }

    if ($_POST["gender"] == 'Exposant') {
        if (isset($_POST["nameExposant"]) && !empty($_POST["nameExposant"])) {

            $nameExposant = strip_tags($_POST["nameExposant"]);
        }
    }
        $message = "Votre inscription a bien été pris en compte" . " " . $lastName . " " . $firstName . " " . ". Merci de votre participation.";
        $headers = 'Content-Type: text/plain; charset="UTF-8"' . " ";

    if( $formErrors == null){
        if (mail($_POST['email'], 'Inscription', $message, $headers)) {
        } else {
          echo "Une erreur est survenue";
        }
   }   
}

