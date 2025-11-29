<?php

// Connecter un utilisateur
if(isset($_POST['btnLogin']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validation des données
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 8)
    {
        $error = "Format d'email invalide ou mot de passe trop court";
        header("Location: login?error=$error");
        exit();
    }
    else
    {
        // Vérification des informations d'identification
        header("Location:listeContacts");
        exit();
    }
}

?>
