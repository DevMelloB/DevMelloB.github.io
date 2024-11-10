<?php
if (isset($_POST['submit']))
{
    $to = "m.brett.pro@gmail.com"; // Your email address
    $name =htmlspecialchars( $_POST)['name'];
    $from =htmlspecialchars( $_POST)['email'];
    $message = htmlspecialchars( $_POST)['message'];
    $subject = "Contact Form Submission";
    $headers = "From:" . $from;
    $result = mail($to, $subject, $message, $headers);

    if ($result)
    {
        echo '<script type="text/javascript">alert("Votre message a été envoyé avec succés!");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

    }
    else
    {
        echo '<script type="text/javascript">alert("Une probmeme est survenu lors de l\'envoi de votre message. Veillez réessayer");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
    }
}
?>