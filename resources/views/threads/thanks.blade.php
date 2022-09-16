@extends('layout')

<?php
    $title=$_GET['title'];

    $left=$_GET['left'];
    $right=$_GET['right'];

    // $start=$_GET['start'];


    $dsn = 'mysql:dbname=deb_ch_main;host=localhost';
    $user = 'root';
    $password='';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
    $sql = 'INSERT INTO `threads`(`title`,`left`,`right`) VALUES ("'.$title.'","'.$left.'","'.$right.'");';
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

    <p>議題: <?php echo $title;?></p>
    <p>左派: <?php echo $left;?></p>
    <p>右派: <?php echo $right;?></p>
    <p>開始時刻: <?php echo $start = date("Y-m-d H:i:s");?></p>

</body>
</html>