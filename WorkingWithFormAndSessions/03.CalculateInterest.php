<form method="GET">
    Enter Amount
    <input type="text" name="amount"> <br>
    <input type="radio" name="currency" value="USD" id="usd">
    <label for="usd">USD</label>
    <input type="radio" name="currency" value="EUR" id="eur">
    <label for="eur">EUR</label>
    <input type="radio" name="currency" value="BGN" id="bgn">
    <label for="bgn">BGN</label><br>

    Compound Interest Amount
    <input type="text" name="interest"> <br>
    <select name="period">
        <option value="6">6 Months</option>
        <option value="12">1 Year</option>
        <option value="24">2 Years</option>
        <option value="60">5 Years</option>
    </select>
    <input type="submit" value="Calculate" name="submit"> <br>

</form>
<?php
define("CURRENCIES", ["usd" => "$", "eur" => "€", "bgn" => "лв."]);
if(isset($_GET['submit'])){
    $amount = floatval(trim($_GET['amount']));
    $currency = strtolower($_GET['currency']);
    $interest = intval(trim($_GET['interest']));
    $period = intval($_GET['period']);
    $result = calculateCompoundInterest($amount,$interest,$period);
    echo CURRENCIES[$currency] . ' '. number_format($result,2,".","");
}
function calculateCompoundInterest(float $amount, int $interest, int $period): float
{
    $interestPerMonth = $interest / 12;
    for ($month = 0; $month < $period; $month++) {
        $amount = $amount * (100 + $interestPerMonth) / 100;
    }
    return $amount;
}
?>
