<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dado</title>
    <style>
        div.form {
            margin-top: 20px;
            display: block;
            text-align: center;
        }
        form
        {
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }
        input{
            padding: 10px 10px;
            background-color: crimson;
            border-color: red;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            font-family: Bahnschrift;
        }
    </style>
</head>
<body>
<h2 style="text-align: center">Dado</h2>
    <?php
    include("Dado.php");

    // Instanciate Class
    $dice = new Dado();
    $numberThrows = 12;

    // Set Minimum and maximum number of dice
    // If no values set all throws will be equal to 0
    $dice->setMinNumDado(0);
    $dice->setMaxNumDado(12);

    echo "<table style='border: 1px solid #ddd; width: 10%; text-align: center; margin: 0 auto;'>";
    // Return 12 random throws between
    for ($i = 1; $i <= $numberThrows; $i++) {
        echo "<tr><td style='border: 1px solid #ddd;'>Tirada $i</td><td style='border: 1px solid #ddd;'>" . rand( $dice->getMinNumDado(), $dice->getMaxNumDado()) . "</td></tr>";
    }
    echo "</table>";
    ?>
<div class="form">
    <form>
        <input type="submit" value="TIRAR DE NUEVO">
    </form>
</div>


</body>
</html>