<?php
$conn = mysqli_connect('localhost','root','','e-agri') or die("unable to connect" .mysql_error($conn));
{
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $comments=mysqli_real_escape_string($conn,$_POST['comments']);
  $sql=mysqli_query($conn,"INSERT INTO contact(name,email,comments) values('$name','$email','$comments')")or die("query error".mysqli_error($conn));
  if($sql === TRUE)
  {
      header('Location:firstpage.php') or die("cannot go at this location ".mysqli_error($conn));
    exit();
  }
  else
  {
      echo "cannot do sql".mysqli_error($conn); 
  }
}

?>