<?php
$conn = mysqli_connect("localhost","root","","users");

    $username = $_POST['name1'];
    $email = $_POST['email1'];
    $password = $_POST['password1'];
    $mobile = $_POST['mobile1'];

    $sql = "INSERT INTO `userdata`(`username`, `email`, `password`, `mobile`) VALUES ('$username','$email','$password','$mobile')";
    $result = mysqli_query($conn,$sql);


    
    

?>
