<form method="GET">
    Enter HTML tag:
    <input type="text" name="tag">
    <input type="submit" value="Submit" name="submit">
</form>
<?php
session_start();
$score = &$_SESSION["score"];
if (!isset($score)) {
    $score = 0;
}
define("HTML_TAGS", ["!DOCTYPE", "a", "abbr", "acronym", "address", "applet", "area", "article", "aside", "audio", "b", "base", "basefont", "bdi", "bdo", "big", "blockquote", "body", "br", "button", "canvas", "caption", "center", "cite", "code", "col", "colgroup", "datalist", "dd", "del", "details", "dfn", "dialog", "dir", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption", "figure", "font", "footer", "form", "frame", "frameset", "h1 to h6", "head", "header", "hr", "html", "i", "iframe", "img", "input", "ins", "kbd", "keygen", "label", "legend", "li", "link", "main", "map", "mark", "menu", "menuitem", "meta", "meter", "nav", "noframes", "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "picture", "pre", "progress", "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "source", "span", "strike", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td", "textarea", "tfoot", "th", "thead", "time", "title", "tr", "track", "tt", "u", "ul", "var", "video", "wbr"]);
if(isset($_GET['submit'])){
    $tag = trim($_GET['tag']);
    if(in_array($tag, HTML_TAGS)){
        $score++;
        echo "Valid HTML tag! <br>";
    }else{
        echo "Invalid HTML tag! <br>";
    }
    echo "Score: {$score}";
}
?>
