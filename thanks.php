<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
    <?php 
    /*nettoyage des données*/ 
    $post = array_map('trim', $_POST);
    $errors = [];
    //repérage des erreurs
    if (empty($post['firstName'])) {
        $errors[] = "Le champ prénom doit être remplie";
    }
    if (empty($post['lastName'])) {
        $errors[] = "Le champ nom doit être remplie";
    }
    if (empty($post['user_mail'])) {
        $errors[] = "Le champ email doit être rempli";
    }
    if (!filter_var($post['user_mail'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Veuillez entrer une adresse mail valide";
    }
    if (empty($post['phone_number'])) {
        $errors[] = "Le champ téléphone doit être rempli";
    }
    if (!preg_match('^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$^', $post['phone_number'])) {
        $errors[] = "Veuillez entrer un numéro de téléphone valide";
    }
    if (empty($post['subject_message'])) {
        $errors[] = "veuillez choisir un sujet dans la liste.";
    }
    if (empty($post['user_message'])) {
        $errors[] = "Veuillez écrire un message";
    }
     ?>
     <?php if(!empty($errors)): ?>
     <?php foreach($errors as $error): ?>
     <?=$error;?> <br>
     <?php endforeach; ?>
     <?php else: ?>
        <?="Merci $_POST[firstName] $_POST[lastName] de nous avoir contacté à propos de $_POST[subject_message]. ";?> <br> 
        <?="Un de nos conseiller vous contactera soit à l’adresse
        $_POST[user_mail] ou par téléphone au $_POST[phone_number] dans les plus brefs délais pour traiter votre demande : ";?>
        <?="$_POST[user_message]";?> <br>
     <?php endif; ?>        
</body>
</html>
