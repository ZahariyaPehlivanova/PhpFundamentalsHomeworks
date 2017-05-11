<link rel="stylesheet" href="styles/expensesStyles.css" media="screen">
<form id="formId" method="GET">
    Enter number of years: <input type="number" name="years" required placeholder="Years"><br>
    <input type="submit" value="Show result">
</form>

<?php
if (isset($_GET['years'])) {
    $years = (int)trim($_GET['years']);
    ?>
    <table id="tableId">
        <tr>
            <?php
                echo "<td>Year</td>";
                for($i = 1;$i < 13; $i++){
                    $dateObj   = DateTime::createFromFormat('!m', $i);
                    $monthName = $dateObj->format('F');
                    echo "<td>{$monthName}</td>";
                }
                 echo "<td>Total</td>";
            ?>
        </tr>
        <?php
            $date = new DateTime();
            $currYear = (int)$date -> format('Y');

            for($i = $currYear;$i > $currYear - $years;$i--){
                $row = "<tr>";
                $row .= "<td>{$i}</td>";
                $total = 0;
                for($j = 0; $j < 12; $j++){
                    $expenses = rand(0, 999);
                    $total += $expenses;
                    $row .= "<td>{$expenses}</td>";
                }
                $row .= "<td>{$total}</td>";
                $row .= "</tr>";
                echo $row;
            }
        ?>
    </table>
    <?php
}
?>
