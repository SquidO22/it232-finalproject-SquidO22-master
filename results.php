<?php 
$percentageScore = filter_input(INPUT_GET, "score", FILTER_VALIDATE_INT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php include 'header.php'; ?>
<body>
<h2>Quiz Results</h2>;
<p>Percentage Score:<?= $percentageScore ?> %</p>;

    </body>
</html>