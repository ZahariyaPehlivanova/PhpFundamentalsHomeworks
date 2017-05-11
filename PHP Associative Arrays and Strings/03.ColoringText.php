<form method="GET">
    <div>
        <input type="text" name="input">
    </div>
    <div>
        <input type="submit" value="Color text">
    </div>
</form>
<?php
if(isset($_GET["input"]) && !empty(trim($_GET["input"]))) {
    $str = trim($_GET['input']);
    for($i = 0;$i < strlen($str);$i++){
        if(!empty(trim($str[$i]))){
            if(ord($str[$i]) % 2 != 0){
                echo "<font color='blue'>{$str[$i]} </font>";
            }else {
                echo "<font color='red'>{$str[$i]} </font>";
            }
        }
    }
}