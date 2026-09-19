<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>📋 Formulaire d'inscription</h1>

    <form action="traitement.php" method="POST">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="age">Age</label>
        <input type="number" id="age" name="age" min="1">

        <label for="ville">Ville</label>
        <select id="ville" name="ville">
            <option value="Paris">Paris</option>
            <option value="Lyon">Lyon</option>
            <option value="Marseille">Marseille</option>
        </select>

        <label>
            <input type="checkbox" name="newsletter" value="oui">
            Je veux recevoir la newsletter
        </label>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>