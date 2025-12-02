<?php
// Укажи почту, куда будут приходить лиды:
$to = "rise2up707@gmail.com";

$name = $_POST['name'];
$age = $_POST['age'];
$country = $_POST['country'];
$languages = $_POST['languages'];
$profession = $_POST['profession'];
$method = $_POST['method'];
$contact = $_POST['contact'];

$subject = "New Lead from Landing Form";

$message = "
New Lead Received:\n\n
Name: $name\n
Age: $age\n
Country: $country\n
Languages: $languages\n
Profession: $profession\n
Communication method: $method\n
Contact Info: $contact\n
";

$headers = "From: no-reply@yourdomain.com";

mail($to, $subject, $message, $headers);

// Сообщение после отправки
echo "<div style='
    font-family: Arial; 
    text-align:center; 
    margin-top: 150px;
    font-size: 22px;
'>
    Thank you for completing the form!<br>Your personal manager will contact you soon.
</div>";
?>
