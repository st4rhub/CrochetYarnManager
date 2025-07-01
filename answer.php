<!DOCTYPE html>
<html lang="en">

<body>


<?php
$yarnStash = [
    "blue"=>59,
    "yellow"=>200,
    "pink"=>700,
    "beige"=>13
];

$yarnTolerance = [
    "cardigan" => 600,
    "top" => 40,
    "dress" => 350,
    "bandana" => 15,
];


// Run script on submit
if (isset($_POST["submit"]) && !empty($_POST["colors"])){
    $total_yarn = 0;
    foreach($_POST["colors"] as $selected_color){
        // Additionner les valeurs pour chaque couleur
        $total_yarn += $yarnStash[$selected_color];
    }
    
    if ($total_yarn > $yarnTolerance[$_POST["garment"]]){
        echo "<h1>And we have a Winner !!</h1>";
        echo "<p>You can comfortably crochet your " . $_POST["garment"] . ", as you have " . $total_yarn . " grams of yarn, and need " . $yarnTolerance[$_POST["garment"]] . " grams.";
    } else {
        echo "<h1>You should probably run to the Yarn store...</h1>";
        echo "<p>You'll have a hard time crocheting your " . $_POST["garment"] . ", as you have " . $total_yarn . " grams of yarn, and need " . $yarnTolerance[$_POST["garment"]] . " grams.";
    
    }
}



?>

 
</body>
</html>
 