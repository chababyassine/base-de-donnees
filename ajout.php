<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="traitement.php" method="post">
        <div>
            <label for="name">Nom</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="color">color</label>
            <input type="text" id="color" name="color">
        </div>
        <div>
            <label for="porte">nombre de porte</label>
            <input type="number" id="porte" name="porte">
        </div>
        <div>
        <label for="image">Image:</label>
        <input type="text" id="image" name="image">
    </div>
        <div>
            <button type="submit">Entrer votre vehicule</button>
        </div>
    </form>

</body>
</html>