<form method="GET">
    Enter tags:
    <input type="text" name="tags">
    <input type="submit" value="Submit">
</form>
<?php
if(isset($_GET['tags'])){
    $tags = explode(', ',$_GET['tags']);
    $len  = count($tags);
    for ($i = 0;$i < $len;$i++){
        echo "<div>{$i} : {$tags[$i]}</div>";
        echo PHP_EOL;
    }
}
?>