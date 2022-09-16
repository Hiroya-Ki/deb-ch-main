@extends('layout')

<?php
    $title=$_GET['title'];

    $left=$_GET['left'];
    $right=$_GET['right'];

    $start=$_GET['start']

    $dsn = 'mysql:dbname= ;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
    $sql = 'INSERT INTO `survey`(`title`,`left`,`right`,`start`) VALUES ("'.$title.'","'.$left.'","'.$right.'","'.$start.'");';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>議論を始めましょう!!</h1>

    <p>議題: <?php echo $title_result;?></p>
    <p>左派: <?php echo $left_result;?></p>
    <p>右派: <?php echo $right_result;?></p>
    <p>開始時刻: <?php echo $start = date("Y-m-d H:i:s");?></p>

</body>
</html>