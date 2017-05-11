<form method="GET">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="number" name="num1">
    </div>
    <div>
        Number 2:
        <input type="number" name="num2">
    </div>
    <?php if (isset($result)) : ?>
    <div>
        Result:
        <input type="text" disabled="disabled" readonly="readonly" value="<?= $result; ?>">
    </div>
    <?php endif; ?>
    <div>
        <input type="submit" name="calc" value="Calculate!">
    </div>
</form>