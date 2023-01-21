<?php
//get data from form  
// $name = $this->input->post('name');
// echo $name;die;

$name = $_POST['name'];
$email = $_POST['email'];
$location = $_POST['location'];
$destination = $_POST['destination'];
$vehicle_type = $_POST['vehicle_type'];
$phone = $_POST['phone'];



$emaill = file_get_contents("customer-email-template.php");
$emaill = str_replace("{{name}}",$name,$emaill);
echo $emaill; 
 
$subject ="Demo Cabs";

$mailto = $email;  //the email which u want to recv this email

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
if (mail($email, $subject, $emaill, $headers)) {
    echo "mail send ... OK"; // do what you want after sending the email   
} 
else {
    echo "mail send ... ERROR!";
    print_r( error_get_last() );
}
$owner_email="nitingopal112@gmail.com";
$o_email = file_get_contents("owner-template.php");
$o_email = str_replace("{{name}}",$name,$o_email);

$variables = array(
    "{{name}}" => $name,
    "{{email}}" => $email,
    "{{location}}" => $location,
    "{{destination}}" => $destination,
    "{{vehicle_type}}" => $vehicle_type,
    "{{phone}}" => $phone
);

foreach ($variables as $key => $value)
    $o_email = str_replace($key, $value, $o_email);


$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
if (mail($owner_email, $subject, $o_email, $headers)) {
    echo "mail send ... OK"; // do what you want after sending the email   
} 
else {
    echo "mail send ... ERROR!";
    print_r( error_get_last() );
}
 
?>