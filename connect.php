<?php

$server="localhost";
$username="root";
$password="";
$database_name="hotel_laguna_rezervari";


$conn=mysqli_connect($server,$username,$password,$database_name);

// verifica conexiunea
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }

if (isset($_POST["Trimite"]))
{

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$email = $_POST['email'];
$data_checkin = $_POST['data_checkin'];
$data_checkout = $_POST['data_checkout'];
$telefon=$_POST['telefon'];
$camera=$_POST['uni'];

$sql = "INSERT INTO Rezervari (Nume, Prenume, Email, Data_CheckIn, Data_CheckOut, Numar_telefon, Tip_Camera) 
 VALUES ( '$nume', '$prenume', '$email', '$data_checkin', '$data_checkout', '$telefon', '$camera')";

 if (mysqli_query($conn, $sql)) {
  echo '<script> alert("Rezervarea dumneavoastră a fost trimisă cu succes ! ") 
         window.history.back();        
         </script>';  

  } else {
    echo "Eroare :  ".$sql. "<br>". mysqli_error($conn);
  }
  
  mysqli_close($conn);
}
  ?>
