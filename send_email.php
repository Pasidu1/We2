<?php
if (_SERVER["REQUEST_METHOD"] == "POST")phone_number = _POST['phone_number'];to = "your-email@gmail.com";
    subject = "Whatsapp Unband Request";message = "Phone number: " . phone_number;headers = "From: webmaster@yourwebsite.com";

    if (mail(to,subject, message,headers)) {
        echo "Request sent successfully!";
    } else {
        echo "Failed to send request.";
    }
}
?>
