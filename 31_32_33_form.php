<?php 

if(isset($_POST['submit'])) {
    
$name = array("davut", "yaman", "salih", "samet", "yasin", "fatih", "erdem", "azez");
    
    $minimun = 5;
    $maximun = 10;

$username = $_POST['username'];
$password = $_POST['password'];
    
  if(strlen($username) < $minimun ) {
  
      echo "Username has to be longer than five <br>";
  
  }  
    
    if(strlen($username) > $maximun  ) {
  
      echo "Username cannot be longer than 10 <br>";
  
  }  
    if($password == "" ) {
          echo "you must enter a password! <br>";
}

    if(!in_array($username,$name) || !in_array($password,$name)) {
    
        echo " Sorry you are not allowed <br>";
    
    } else {
    
    echo "Welcome ". $username . "<br>" .
        "Your Password is " . $password . "<br>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="31_32_33_form.php" method="post">
    
<input type="text" name="username" placeholder="Enter Username">
<input type="password"  name="password" placeholder="Enter Password"><br>
<input type="submit" name="submit">
    
    
</form>



</body>
</html>
