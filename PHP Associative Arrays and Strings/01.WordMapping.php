<form method="GET">
    <div>
        <input type="text" name="input">
    </div>
    <div>
        <input type="submit" value="Count words">
    </div>
</form>
<?php
if(isset($_GET["input"]) && !empty(trim($_GET["input"]))) {
    $str = trim($_GET['input']);
    preg_match_all("/[a-zA-Z]+/", $str, $words);
    $words = array_map("strtolower", $words[0]);
    $res = [];
    foreach ($words as $key => $value){
        $value = strtolower($value);
        if(!isset($res[$value])){
            $res[$value] = 0;
        }
        $res[$value]++;
    }
    $output = "<table border='2'>";
    foreach ($res as $key => $value) {
        $output .= "<tr><td>{$key}</td><td>{$value}</td></tr>";
    }
    $output .= "</table>";
    echo $output;
}