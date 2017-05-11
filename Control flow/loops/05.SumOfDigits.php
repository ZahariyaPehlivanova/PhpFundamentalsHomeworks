<link rel="stylesheet" href="styles/sumOfDigitsStyles.css" media="screen">
<form id="formId" method="GET">
    Input string: <input type="text" name="numbers" required><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['numbers'])) {
    $numbers = trim($_GET['numbers']);
    $numbers = array_map('trim', array_filter(explode(',', $numbers)));
    ?>
    <table id="tableId">
        <?php
        foreach ($numbers as $num) {
            if(ctype_digit($num)){
                $sum = 0;
                $chars = str_split($num);
                foreach ($chars as $ch){
                    $digit = (int)$ch;
                    $sum += $digit;
                }
                echo "<tr><td>{$num}</td><td>{$sum}</td></tr>";
            }
            else{
                echo "<tr><td>{$num}</td><td>I cannot sum that</td></tr>";
            }
        }
        ?>
    </table>
    <?php
}
?>
<?php
?>
