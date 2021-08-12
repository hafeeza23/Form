<?php
  
  $conn = new mysqli("localhost","root","","register");
if(!$conn){
die("From is not connected to the database".mysqli_error());
}
else{
if(isset($_POST['form']))
{
  $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn,$_POST['lastname']) ;
  $company= mysqli_real_escape_string($conn,$_POST['company']) ;
  $email =mysqli_real_escape_string($conn,$_POST['email']) ;
  $areacode = mysqli_real_escape_string($conn,$_POST['areacode']) ;
  $phone = mysqli_real_escape_string($conn,$_POST['phone']) ;
  $subject= mysqli_real_escape_string($conn,$_POST['subject']) ;
  
  $sql = "insert into form(firstname,lastname,company,email,areacode,phone,subject) values('$firstname','$lastname','$company','$email','$areacode','$phone','$subject')";
  $result = mysqli_query($conn,$sql);
  if(!$result)
  {
      echo "not registered";
  }
  else{
      echo "Successfully";
  }
  mysqli_close($conn);
}

}
?>
