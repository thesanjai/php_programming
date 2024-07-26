<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr =[1,2,3,4,5];

    for($j=0 ;$j<10;$j++) { ?>
       <?php <tr> ?>
        <?php
        for($i=0 ; $i<5;$i++){ ?>
            <pre> <?php echo "{$i}*{$arr[$i]} = $i*$arr[$i] "; ?> </pre>
        <?php }?>
    <?php }?>

</body>
</html>