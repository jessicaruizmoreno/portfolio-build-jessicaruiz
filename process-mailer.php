<?php 
if(isset($_POST['submit'])){
    $to = "hello@jessicaruiz.ca"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $sub = $_POST['subject'];
    $message = $_POST['message'];
   
    $txt = $name . " " . $sub . " wrote the following:" . "\n\n" . 
    $message;
   
   
    $headers = "From:" . $from;
  
 

mail($to, $sub, $txt, $headers);
  
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
  
    header("Location: index.php?mailsent");
    }
?>

