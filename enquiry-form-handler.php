<?php

$errors = '';
$myemail = 'D00233640@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['phone']) ||
   empty($_POST['message']) ||

   empty($_POST['gender']) ||
   empty($_POST['postcode']) || 
   empty($_POST['carbrand'])||
   empty($_POST['price'])  

   
   )
{
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$gender = $_POST['msex'];
$postcode = $_POST['zip'];
$carbrand = $_POST['country'];
$price= $_POST['en'];


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n Phone: $phone \nMessage:  \n $message \nGender:  
        \n $gender \nPostcode: \n $postcode \nCarBrand: \n $carbrand \n Price: \n $price" ;

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: thank-you.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Enquiry form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>