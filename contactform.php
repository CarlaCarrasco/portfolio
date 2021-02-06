<?php 
    //if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $message = $_POST['message'];
        $mailTo = 'carla@cc-code.dev';
        $subject = "CC-CODE.DEV - Message From " .$name ."!";
        $headers = "From: $mailTo";
        // $headers .= "Reply-to: $emailFrom \r\n";
        $txt = "You have recieved an email from ".$name."!\nEmail: ".$emailFrom."\nMessage: \n ".$message;
        // $txt = $message;
        // mail($mailTo, $subject, $txt, $headers);
        //header("Location: index.html");
    //}   
?>
<html>
<body style="background: #4f4f4f;">

<div class = "main-container" style="display: flex;justify-content: center;align-items: center;border: 3px solid #000;margin-top: 8rem;width: 35rem;margin: 8rem auto;flex-wrap: wrap;padding: 20px;background: #c800c5;color: white;font-family: 'Courier New', Courier, monospace;">
    <div>
        <h1>Thanks for being awesome!</h1>
        <h3>I received your message and will respond as soon as possible.</h3>
        <h3>Have a great day!</h3>
        <h3>- Carla</h3>
    </div>
    <a href="/" style="color: white;">Back to Carla's site!</a>
</div>


</body>
</html> 




    