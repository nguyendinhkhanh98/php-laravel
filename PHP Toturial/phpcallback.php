// php callback
<?php
function my_callback($item){
    returm str($item);
}
$strings = ["apple","orange","banana","coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);
?>

// anonymos function php7

<?php
$strings = ["apple","orange","banana","coconut"];
$lengths = array_map(function($item){return str($item);},$strings );
print_r($lengths);
?>

// calback trong các function do user define
<?php
function exclaim($str){
    return $str. "! ";
}
function ask($str){
    return $str. "? ";
}
function printFormatted($str, $format){
    echo $format($str);
}
printFormatted("Hello Word", "exclaim");
printFormatted("Hello Word", "ask");

?>

// php_json_encode() ; php_json_decode()

<?php
$jsonobj ='{Peter":35,"Ben":37,"Joe":43}'
$obj = json_decode($jsonobj, true);
foreach($arr as $key => $value){
    echo $key . "=>" . $value . "<br>";
}
?>