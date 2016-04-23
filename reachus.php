<?php

    $email   = $_POST['email'];
    $message = $_POST['message'];
    $name = $_POST['message'];

    $to      = "aliya.shah@student.maastrichtuniversity.nl";
    $subject = "New Request from $name";
    $headers = "From: $email";

    mail($to,$subject,$message,$headers);

?>