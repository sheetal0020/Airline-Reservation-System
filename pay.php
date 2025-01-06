<?php

$conn =  mysqli_connect('localhost','root','','airline2');

if (isset($_POST['payment'])) {

      $username = $_POST['username'];
      $password = $_POST['password'];
      $cellphone = $_POST['cellphone'];
      $cname = $_POST['cname'];
      $ctype = $_POST['ctype'];
      $cvv = $_POST['cvv'];
      $cnumber = $_POST['cnumber'];
      $validtill = $_POST['validtill'];

      $query = "INSERT INTO payment(username, password, cellphone, cname, ctype, cvv, cnumber, validtill) VALUES('$username','$password', '$cellphone', '$cname', '$ctype', '$cvv', '$cnumber', '$validtill')";

      $result = mysqli_query($connect,$querry);

      if ($result) {
            $_SESSION['user']=$username;
            header("Location: finish.php");
            echo "<script>alert('Payment Completed Successfully')</script>";
      } else{
            echo "<script>alert('Error while making payment')</script>";
      }
}
mysqli_close($conn);
?>

      