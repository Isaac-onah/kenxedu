    <?php
        
//   use PHPMailer\PHPMailer;
   echo "<pre>";
   
   print_r($_POST);
    echo '</pre>';
   echo("hello");
   
   if(isset($_POST['name']) && isset($_POST['email'])){
       
       $name =$_POST['name'];
       $email =$_POST['email'];
       $subject =$_POST['subject'];
       $message =$_POST['message'];
       
       $contacts = array("info@kenxedu.com", "kenx.edu@gmail.com",);
       
       foreach($contacts as $contact) {
       
       $headers = "From: support@kenxedu.com";
       $to = $contact;
       $body = "";
       
       $body .= "From:" .$name."\r\n";
       $body .= "Email:" .$email."\r\n";
       $body .= "Message:" .$message."\r\n";
       
       mail($to,$subject,$body, $headers);
       
      header("Location:https://kenxedu.com/index.php"); 
      
   }
       
       
    //   require_once "PHPMailer/PHPMailer.php";
    //   require_once "PHPMailer/SMTP.php";
    //   require_once "PHPMailer/Exception.php";
       
       
       
       
       
    //   $mail = new PHPMailer();
       
     
    //   $mail -> isSMTP();
    //   $mail -> Host = "smtp.gmail.com";
    //   $mail -> SMTPAuth = true;
    //   $mail -> Username = "isaaconah991@gmail.com";
    //   $mail -> Password= 'lilwayne76Z';
    //   $mail -> port = 465;
    //   $mail -> SMTPSecure ="ssl";
  
    //  $mail ->isHTML(true);
    //   $mail ->setFrom($email,$name);
    //   $mail -> address("isaaconah991@gmail.com");
    //   $mail -> Subject = ("$email ($subject)");
    //   $mail -> Body = $body;
       
    //   if($mail ->send()){
    //       $status ="successfull";
    //       $response = "Email is sent";
    //   }
    //   else
    //   {
    //       $status = "failed";
    //       $response = "Something went wrong: <br>" . $mail->ErrorInfo; 
           
    //   }
       
    //   exit(json_encode(array("status" => $status, "response"=>$response)));
       
   }
    
    ?>
    