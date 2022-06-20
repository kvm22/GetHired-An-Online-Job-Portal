<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$job_role = $_POST['job_role'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$date = $_POST['date'];
$resume = $_FILES['resume'];

$conn = new mysqli('localhost','root','','form_data');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO info (first_name,last_name,email,phone_no,job_role,gender,address,city,pincode,date,resume) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt-> bind_param("sssissssiss",$first_name, $last_name, $email, $phone_no, $job_role, $gender, $address, $city, $pincode, $date, $resume);    
    if ($stmt->execute()) {
        echo "<script>alert('New record inserted sucessfully.')</script>";
    }
    else {
    }
    $stmt->close();
    $conn->close();
}


?>