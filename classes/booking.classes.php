<?php 

$servername='localhost';
$username='root';
$password='';
$dbname='test';

// Connect to database
try {
    
    
    $pdo = new PDO("mysql:host=$servername; dbname=".$dbname, $username, $password);

    // Error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if (isset($_POST['name'])) {

    // Grab user inputs
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    // Define sql statement
    $sql="INSERT INTO booker (username, email, pwd) VALUES ('$name','$email','$pwd');";

    // Prepare the sql statements template
    $stmt=$pdo->prepare($sql);


    //Execute the prepared template by adding the recieved values in the placeholder spots
    $stmt->execute([$name,$email,$pwd]);

    //return to the form section
    
    echo "<h3>Booking suubmitted!</h3>";

    header("location: ../index.php#book");

    



}


} catch (PDOException $e) {
    echo "<h4>Connection failed:</h4>".$e->getMessage();

}