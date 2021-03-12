<?php


$conn = mysqli_connect("localhost", "myuser", "mypass", "mydb");



// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

echo "Connected successfully";




$name = $_POST["pplname"];

$email = $_POST["email"];

$text = $_POST["textfeedback"];

if (empty($name)){
    echo "Please enter name";
}

elseif (empty($email)){
    echo "Plase enter email";
}

elseif(empty($textfeedback)){
    echo "Please enter text for feedback";
}




$sql = "INSERT INTO tbl_feedback VALUE ('$name', '$email','$text')";


if ($conn->query($sql)===TRUE){

echo "New record created successfully";

} else {

echo "Error: " . $sql. "<br>" .$conn->error;

}


$conn->close();

?>