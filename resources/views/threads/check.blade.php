@extends('layout')

<?php
    $title= $_POST['title'];
    if ($title== ''){
        $title_result = '議題が入力されていません';
    } else { 
        $title_result=$title;
    }
    $left = $_POST['left'] ;
     if ( $left == ' ' ) { 
        $left_result = '左派が入力されていません'; 
    } else { 
    $left_result = $left; 
    }      
    $right = $_POST['right'] ;
    if ( $right == ' ' ) { 
       $right_result = '右派が入力されていません'; 
   } else { 
   $right_result = $right; 
   }      

?>

<!DOCTYPE html>
<html lang = " en " >
<head>
    <meta charset=" UTF-8">
    <meta http - equiv = " X - UA - Compatible " content = " IE = edge " >
    <meta name = " viewport "content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>内容の確認</h1>

    <p>議題: <?php echo $title_result;?></p>
    <p>左派: <?php echo $left_result;?></p>
    <p>右派: <?php echo $right_result;?></p>

    <form action="thanks.php" method="POST">
        <input type="hidden" name="title" value="<?php echo $title_result;?>">
        <input type="hidden" name="left" value="<?php echo $left_result;?>">
        <input type="hidden" name="right" value="<?php echo $right_result;?>">
        <input type="submit" value="OK">
        <input type="submit" value="戻る">
    </form>

</body>
</html>