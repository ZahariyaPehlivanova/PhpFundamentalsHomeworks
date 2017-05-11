<form id="formId" method="GET">
    Starting index: <input type="number" name="start" required>
    End index: <input type="number" name="end" required>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['start']) && isset($_GET['end'])) {
    $start = trim($_GET['start']);
    $end = trim($_GET['end']);
    $result = "";
    for($i = $start; $i<= $end; $i++){
        if(isPrime($i)){
            $result .= "<strong>{$i}</strong>, ";
        }else{
            $result .= "{$i}, ";
        }
    }
    $result = rtrim($result, ', ');
    echo $result;
}

function isPrime($num)
{
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
