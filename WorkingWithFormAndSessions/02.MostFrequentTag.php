<form method="GET">
    Enter tags:
    <input type="text" name="tags">
    <input type="submit" value="Submit" name="submit">
    <input type="submit" value="Clear" name="clear">
</form>
<?php
session_start();
if(isset($_GET['submit'])){
    $tags = explode(', ',trim($_GET['tags']));
    $len  = count($tags);
    if (!isset($_SESSION["tags"])) {
        $_SESSION["tags"] = [];
    }
    $result = &$_SESSION["tags"];

    for ($i = 0;$i < $len;$i++){
        $tag = $tags[$i];
        if(!key_exists($tag,$result)){
            $result[$tag] = 0;
        }
        $result[$tag]++;
    }

    arsort($result);
    foreach ($result as $key=>$value){
        echo "<div>{$key} : {$value} times </div>";
    }
    $mostFrequent = array_keys($result)[0];
    echo "<br>";
    echo "<div> Most Frequent Tag is: {$mostFrequent}</div>";
}
if(isset($_GET['clear'])){
    session_destroy();
}
?>
