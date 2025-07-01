<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Let's play Yarn roulette!</h1>
<p>Find out if you have enough yarn left to finish your project!</p>
<form action="answer.php" method="POST">
    <p>What do you plan on making?</p>
    <input type="radio" name="garment" value="cardigan"> Cardigan
    <input type="radio" name="garment" value="top"> Small top
    <input type="radio" name="garment" value="dress"> Dress
    <input type="radio" name="garment" value="bandana"> Bandana
    <br>
    <p>What colors are you thinking of using?</p>
    <input type="checkbox" name="colors[]" value="blue" id="blue">
    <label for="blue"> Blue </label>
    <input type="checkbox" name="colors[]" value="yellow" id="yellow">
    <label for="yellow"> Yellow </label>
    <input type="checkbox" name="colors[]" value="pink" id="pink">
    <label for="pink"> Coral Pink </label>
    <input type="checkbox" name="colors[]" value="beige" id="beige">
    <label for="beige"> Beige </label>

<br>

<input type="submit" name="submit">
</form>
 
</body>
</html>
 