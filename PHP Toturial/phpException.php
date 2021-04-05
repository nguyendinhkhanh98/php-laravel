// php exception

<?php
function devide($devidend, $devisor){
    if($devisor == 0){
        throw new Exception ("Devision by zero");
    }
    return $devidend / $devisor;
}
echo devide(5.0);
?>

//show a message when an exception is thrown
// try.. catch
<?php
function devide($devidend, $devisor){
  throw new Exception("Devision by zero");
}
return $devidend / $devisor;

try {
    echo devide(5,0);
}catch (Exception $e){
    echo "Unable to devide.";
}
?>

// try.. catch .. finally (finally luon duoc thuc thi)

// Exception object 

<?php
function devide($devidend, $devisor){
    if ($devisor == 0){
        throw new Exception ("devision by zero")
    }
    return $devidend / $devisor;
}

try {
    echo devide(5,0)
}catch(Exception $ex){
    $code = $ex -> getCode();
    $message = $ex ->getMessage();
    $file = $ex -> getFile();
    $line = $ex -> getLine();
    echo "Exception thrown in $file on line $line: [Code $code] $message";
}
?>