<?php

$formErrors = [];

$regex = [
    'name' => '#^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$#',
    'phonenumber' => '#^[0]{1}[1-79]{1}([ ]{1}[0-9]{2}){4}$#',
    'email' => '#^([a-z0-9\-_.]){1}(@){1}([a-z\-.]){1}(\.){1}([a-z]{2,6}){1}$#',
];

if (count($_POST) > 0) {
    if (!empty($_POST['first_name'])) {
        if (preg_match($regex['name'], $_POST['first_name'])) {
        $firstname = strip_tags($_POST['first_name']);
    } else {
        $formErrors['first_name']  = 'Veuillez renseigner votre prénom';
    }
}
    if (!empty($_POST['last_name'])) {
        if (preg_match($regex['name'], $_POST['last_name'])) {
            $lastname = strip_tags($_POST['last_name']);
    } else {
        $formErrors['last_name'] = 'Veuillez renseigner votre nom';
    }
}

    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
        } else {
            $formErrors['email'] = 'Veuillez renseigner un email valide';
        }
    }else {
        $formErrors['email'] = 'Veuillez renseigner un email valide';
    }

    if (!empty($_POST['phonenumber'])) {
        if (preg_match($regex['phonenumber'], $_POST['phonenumber'])) {
          $phonenumber = $_POST['phonenumber'];
        } else {
            $formErrors['phonenumber'] = 'Veuillez renseigner un numéro de téléphone valide';
        }
}
    if (!empty($_POST['message'])) {
        $firstname = strip_tags($_POST['message']);
    } else {
        $formErrors['message']  = 'Veuillez rédiger votre message';
    }
    $message = 'Votre message à été envoyé avec succès. L\'équipe vous répondra dans les plus brefs délais';
    $headers =  'Content-Type : text/plain; charset="UTF-8"' . " ";
    if($formErrors == null){
    if (mail($_POST['email'], 'Confirmation', $message, $headers)) {
        header("Location: http://127.0.0.1/Salon%20de%20l'auto/");
     } else {
            echo 'Une erreur est survenue';
        }
    }

}

