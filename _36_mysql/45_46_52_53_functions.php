<?php include "45_db.php";?>
<?php


function loginUSer() {


if(isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];

$connection = mysqli_connect('localhost', 'root', '112358', 'loginapp');

    if($connection) {

    echo "We are connected <br>";

    } else {

    die("Database connection failed <br>");

    }

if($username && $password) {
echo "un:" . $username . "<br>";
echo "pw:" . $password;

 } else {

        echo "this field cannot be empty";

    }

}

}

function createRows() {

if(isset($_POST['submit'])) {
global $connection;
    
$username = $_POST['username'];
$password = $_POST['password'];
    
    $connection = mysqli_connect('localhost', 'root', '112358', 'loginapp');

$username = mysqli_real_escape_string($connection, $username );
$password = mysqli_real_escape_string($connection, $password );

$hashFormat = "$2y$10$";
$salt = "iusesomecrazystrings22";
$hashF_and_salt = $hashFormat . $salt;
$password = crypt($password,$hashF_and_salt);

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";
    
   $result = mysqli_query($connection, $query);

        if($connection) {

    echo "We are connected <br>";

    } else {

    die("Database connection failed <br>");

    }

    if(!$result) {
        die('Query FAILED' . mysqli_error($connection));
    
    } else {
    
    echo "Record Create"; 
    
    }
    
    
  
}


}

function readRows() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

        
while($row = mysqli_fetch_assoc($result)) {
        
        print_r($row);
    }  
        if(!$result) {
        die('Query FAILED' . mysqli_error());
    }
}


function showAllData() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
       $id = $row['id'];
        
    echo "<option value='$id'>$id</option>";
    
    }
    
}

function UpdateTable() {
    if(isset($_POST['submit'])) {
    
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
    
$query = "UPDATE users SET ";
$query .= "username = '$username', ";
$query .= "password = '$password' ";
$query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Record Updated"; 
    
    }
        
    }

}


function deleteRows() {
    
    if(isset($_POST['submit'])) {
global $connection;
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];
    
$query = "DELETE FROM users ";
$query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($connection));    
    }else {
    
    echo "Record Deleted"; 
    
    }
  
    }

}



















