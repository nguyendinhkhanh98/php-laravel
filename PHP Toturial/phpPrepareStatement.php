//PDO
<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //set PDO exception
    $conn->setAttribute(PDO::ATER_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //prepare SQL
    $stmt = $conn->prepare("INSERT INTO MyGuests(firstname, lastname, email)
    VALUE (:firstname,:lastname,:email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    //insert row
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    echo "New record created successfully";

}catch(PDOException $e){
    echo "error: " .$e->getMessage();
}
$conn = null;

?>