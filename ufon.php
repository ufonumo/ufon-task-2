<?php

    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $title = $_POST['title'];
        $message = $_POST['message'];


        $email_from = 'ufonumo@gmail.com';

        $email_subject = "New Form Submission";

        $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Title: $title.\n".
                                "User Message: $message.\n";

        $to = "ufonumo@gamil.com";
    
        $headers = "From: $email_from \n\n";

        $headers = "Reply-To: $visitor_email \n\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location: index.php?mailsend");
    }   
?>