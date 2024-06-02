if(isset($_POST['submit'])){
    $to = "yodi.enzo@outlook.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Contact Us Submission";
    $message = $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
}