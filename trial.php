<?php
// echo " hii";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $number=$_POST['Phone'];
    $email=$_POST['email'];

    echo $name;
    
    
     $to='ravi123chauhan@gmail.com';
     $subject='Form Submission';
     $message="Name :".$name . "\n" ."Mobile Number :".$number."\n" . "Wrote The following:"."\n\n".$email;
     $header= "from :".$name;

     if(mail($to,$subject,$message,$header)){
         echo "<h1> Sent Successfully </h1>";
         echo"<script> alert('Your form has been sucessfull submitted'</script>";
     } else {
         echo "Something Went Wrong";
     }


     
}



?>