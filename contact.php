<?php
error_reporting(0);
session_start();
$contactError;
$contactSuccess;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require './phpmailer/phpmailer/phpmailer/src/PHPMailer.php';
require './phpmailer/phpmailer/phpmailer/src/Exception.php';
require './phpmailer/phpmailer/phpmailer/src/SMTP.php';
if(isset($_POST["contact"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $msgdate = date("Y-m-d");

    include "./includes/db.php";

    $insertContact = "INSERT INTO contacted (userid, firstname, lastname, email, message, datesent) VALUES ({$_SESSION["userid"]}, '$firstname', '$lastname', '$email', '$message', '$msgdate')";

    $mail = new PHPMailer(TRUE);
    try{
        $mail -> setFrom('PHPFinalProject@gmail.com', 'Eat&RestContact');
        $mail -> addAddress('d.rudenko51@gmail.com');
        $mail -> Subject = "Message from" . $firstname . $lastname;
        $mail -> isHTML(TRUE);
        $mail -> Body = "<h1>Message from Eats&Rest Contact form!</h1><br/><b>From:</b>  " . $firstname . $lastname . 
        "<br/>
        <b>Person's email:</b> " . $email . 
        "<br/>
        <h1><b>Message: </b><br/></h1>" . $message;
        $mail -> isSMTP();
        $mail -> Host = 'smtp.gmail.com';
        $mail -> SMTPAuth = TRUE;
        $mail -> SMTPSecure = 'tls';
        $mail -> Username = 'dimastaca51@gmail.com';
        $mail -> Password = 'Dima85803695';
        $mail -> Port = 587;
        $mail -> send();
        $contactSuccess = "Message successfully sent";
    } catch(Exception $e){
        echo $e -> errorMessage();
        $contactError = "Something went wrong.<br/>It's better to call restaurant for now.<br/>Sorry for inconvenience... ";
    }
    
}
include "./includes/header.php"
?>
<main id="contactmain">
    <div id="contactformdiv">
        <form action="./contact.php" method="post">
            <label>First Name</label>
            <br>
            <input name="firstname" type="text" placeholder="Enter First Name">
            <br>
            <label>Last Name</label>
            <br>
            <input name="lastname" type="text" placeholder="Enter Last Name">
            <br>
            <label>Email</label>
            <br>
            <input name="email" type="email" placeholder="Enter Email">
            <br>
            <label>Message</label>
            <br>
            <textarea name="message" placeholder="What do you desire..."></textarea>
            <br>
            <input type="submit" name="contact" value="Submit" class="btn btn-primary">
        </form>
        <?php echo "<h3 style='color:green;'>$contactSuccess</h3>"; ?>
        <?php echo "<h3 style='color:red;'>$contactError</h3>"; ?>
    </div>
</main>
<?php include "./includes/footer.php" ?>