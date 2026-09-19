<?php

$nom = htmlspecialchars($_POST['nom'] ?? '');
$prenom = htmlspecialchars($_POST['prenom'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$age = htmlspecialchars($_POST['age'] ?? '');
$ville = htmlspecialchars($_POST['ville'] ?? '');
$newsletter = isset($_POST['newsletter']) ? 'Oui' : 'Non';


$erreurs = [];
if (empty($nom) || empty($prenom)) {
    $erreurs[] = "Le nom et le prénom sont obligatoires.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = "L'email n'est pas valide.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Résultat du formulaire</h1>

    <?php if (!empty($erreurs)): ?>
        <div class="erreur">
            <ul>
                <?php foreach ($erreurs as $erreur): ?>
                    <li><?= $erreur ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else: ?>
        <div class="succes">
            <p>Merci <?= $prenom ?> <?= $nom ?> !</p>
            <ul>
                <li>Email : <?= $email ?></li>
                <li>Âge : <?= $age ?> ans</li>
                <li>Ville : <?= $ville ?></li>
                <li>Newsletter : <?= $newsletter ?></li>
            </ul>
        </div>
    <?php endif; ?>

    <a href="index.php">← Retour au formulaire</a>
</body>
</html>