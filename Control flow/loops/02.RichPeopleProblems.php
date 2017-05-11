<link rel="stylesheet" href="styles/richPeopleStyles.css" media="screen">
<form id="formId" method="GET">
    Enter cars: <input type="text" name="cars" required placeholder="Name"><br>
    <input type="submit" value="Show result">
</form>

<?php
if (isset($_GET['cars'])) {
    $cars = trim($_GET['cars']);
    $cars = array_map('trim', array_filter(explode(',', $cars)));
    ?>
    <table id="tableId">
        <tr>
            <td>Car</td>
            <td>Color</td>
            <td>Count</td>
        </tr>
        <?php
        foreach ($cars as $car) {
            $car = htmlentities($car);
            $color = generateColor();
            $count = rand(1, 5);
            echo "<tr><td>{$car}</td><td>{$color}</td><td>{$count}</td></tr>";
        }
        ?>
    </table>
    <?php
}
?>
<?php
function generateColor()
{
    $colors = ['blue', 'brown', 'yellow', 'green'];
    return $colors[rand(0, sizeof($colors) - 1)];
}
?>
