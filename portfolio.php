<?php
if (isset($_POST['submit']))
{
    $to = "m.brett.pro@gmail.com"; // Your email address
    $name =htmlspecialcharss( $_POST)['name'];
    $from =htmlspecialcharss( $_POST)['email'];
    $message = htmlspecialcharss( $_POST)['message'];
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
        echo '<script type="text/javascript">alert("Votre message n/'a été pas été envoyé");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
    }
}
?>
2. U