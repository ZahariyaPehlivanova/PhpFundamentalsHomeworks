<link rel="stylesheet" href="styles/squareRootStyles.css" media="screen">
<table id="tableId">
    <tr>
        <td id="bolted">Number</td>
        <td id="bolted">Square</td>
    </tr>
    <?php
    $sum = 0;
    for($i = 0;$i <= 100; $i+=2){
        $sum += sqrt($i);
        ?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo   round(sqrt($i), 2)?></td>
        </tr>
        <?php
    }
    ?>
    <tr>
        <td id="bolted">Total:</td>
        <td><?php echo round($sum, 2)?></td>
    </tr>
</table>
