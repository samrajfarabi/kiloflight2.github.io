<?php
//variable setting
$fname = $_REQUEST['fname'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$amount = $_REQUEST['amount'];
$ref = $_REQUEST['ref'];
$dig = $_REQUEST['dig'];

//check input fields//
if (empty($fname) || empty($address) || empty($phone) || empty($amount) || empty($ref) || empty($dig) )
{
    echo "Please fill al the fields";
}
else
{
    mail("bdcyberleaders404@gmail.com", "From: $fname <$address $phone>" , "ref = $ref" , "amount = $amount" , "lastdigit = $dig" );
    echo "<script type='text/javascript'>alert('Your donation sent successfully. We will call to confirm you. ');
    window.history.log(-1);
    </script>";
}
?>