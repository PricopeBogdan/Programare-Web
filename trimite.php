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

$nume_prenume = $_POST['your_name'];
$email = $_POST['your_email'];
$mesaj = $_POST['your_enquiry'];

$sql = "INSERT INTO contact (Nume_Prenume, Email, Mesaj) 
 VALUES ( '$nume_prenume', '$email', '$mesaj')";
 
 if (mysqli_query($conn, $sql)) 
 {echo '<script> alert("Mesajul dumneavoastră a fost trimis cu succes ! ") 
        window.history.back(); 
        </script>'; } 
  else 
  {echo "Error: ".$sql. "<br>". mysqli_error($conn);}

  mysqli_close($conn);
}
  ?>

