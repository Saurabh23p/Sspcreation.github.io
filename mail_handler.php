<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $to='sudip100898@gmail.com';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Phone; ".$phone."\n"."wrote the following;"."\n\n".$msg;
    $headers="From; ".$email;

    if(mail($to, $subject, $message, $headers)){
        echo "<h1>Sent Seuccessfully! Thank You"." ".$name.", We will contact you shortly!<h1>";
    }
    else{
        echo "Something went wrong";

    }
}




/*$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];



$email_from = 'portfolio';


$email_subject = "New form submission";

$email_body = "User Name: $name.\n".
             
                "User Email: $visitor_email.\n".

                "User Message: $message.\n".


$to = "Sudip100898@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);


headers("Location: index.html");*/




?>