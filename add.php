<?php
    $i=1;
    $j=10;

    print($i+$j);
?>

<table>
    <tr>
        <th>MULTIPLICANT</th>
        <th>MULTIPLIER</th>
        <th>=</th>
        <th>RESULT</th>
    </tr>

   
        <?php for($i=0;$i<=100;$i++){ ?>
            <tr> 
                <td><? print(2); ?></td>
                <td><?print($i);?></td> 
                <td><?="="?></td>
                <td><?print($i*2);?></td>
            </tr>
        <?}?>
   
</table>
<pre>
<?
    system("./star " . 10);
?>
</pre>