<link rel="stylesheet" href="styles/HTMLTable.css" media="screen">
<?php
    $name = 'Gosho';
    $phone = '0895-366-947';
    $age = 30;
    $address = 'Manastirski Livadi';
?>

<table id="tableId">
    <tr>
        <td id="firstColumn">Name:</td>
        <td id="secondColumn"><?php echo $name ?></td>
    </tr>
    <tr>
        <td id="firstColumn">Phone number:</td>
        <td id="secondColumn"><?php echo $phone ?></td>
    </tr>
    <tr>
        <td id="firstColumn">Age:</td>
        <td id="secondColumn"><?php echo $age ?></td>
    </tr>
    <tr>
        <td id="firstColumn">Address:</td>
        <td id="secondColumn"><?php echo $address ?></td>
    </tr>
</table>

