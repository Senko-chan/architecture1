<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="card.css">
</head>
<body>
    
    <?php

$conn = new PDO ("mysql:host=localhost;dbname=izotova", "root", "");

$result= $conn->query("SELECT * FROM goods");

foreach($result AS $row) {
    echo "<div class = 'card'>";
    echo '<h2>'.$row['name'].'</h2>';
    echo '<h3>'.$row['model'].'</h3>';
    echo '<h2>'.$row['price']. ' руб. </h2>';
    echo '<img src="'.$row['photo'].'">';
    echo '<p>'.$row['info'].'</p>';
    echo '</div>';
}
?>
</body>
</html>