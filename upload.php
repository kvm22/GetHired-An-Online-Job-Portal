<?php

include 'database.php';

if(isset($_POST['submit']))
{
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

    /* Info about file */
    $fileName = $_FILES['resume']['name'];
    $fileTmpName = $_FILES['resume']['tmp_name'];
    $fileSize = $_FILES['resume']['size'];
    $fileError = $_FILES['resume']['error'];
    $fileType = $_FILES['resume']['type'];

    $FileExt = explode('_._',$fileName);
    $fileActualExt = strtolower(end($FileExt));

    $allowed = array('pdf');

    if(in_array($fileActualExt, $allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 10000)
            {
                $fileNameNew = uniquid('', true).".".$fileActualExt;
                $fileDestination = 'Resume_File/'.$fileNmaeNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: main.php?Upload_Success");
            }else{
                echo "<script>alert('Size limit exceeded..');</script>";
            }
        }else{
            echo "<script>alert('Error uploading file..');</script>";
        }
    }else{
        echo "<script>alert('Only PDF format is allowed..');</script>";
    }

    $sql = "INSERT INTO formdata (first_name, last_name, email, phone_no., job_role, gender, address, city, pincode, date, resume) VALUES('$first_name','$last_name','$email','$phone_no.','$job_role','$gender','$address','$city','$pincode','$date','$resume')";
    
    if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('You have applied Successfully')</script>";
        echo "<script>window.open('main.php','_self')</script>";
    }
    else
    {
        echo "error:" .mysqli_error($conn);
    }  
  }     
    mysqli_close($conn);

  
?>
