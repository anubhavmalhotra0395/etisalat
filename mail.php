<?php

include 'connection.php';
require "PHPMailer/PHPMailerAutoload.php";
  if(isset($_POST['submit1']))
    {
 
try{
    
        $name=$_POST['name'];
        $mobile=$_POST['mnumber'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $insertquery="INSERT INTO elifenormal(Name,Email,Mobile,Address) VALUES('$name','$email','$mobile','$address')";
        $iquery=mysqli_query($con,$insertquery);

       
        $mail = new PHPMailer();
        //$mail->IsSMTP();  --- commented out
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'SSL';
        $mail->Host = 'premium129.web-hosting.com';
        $mail->Port = 465;
        $mail->Username = 'uaehomeinternetttf@uaehomeinternet.ae';
        $mail->Password = 'Ishfaq@1234'; 

        $mail->setFrom('uaehomeinternetttf@uaehomeinternet.ae', 'UAEHOMEINTERNET ');

        $mail->addAddress('uaehomeinternetttf@gmail.com','UAEHOMEINTERNET' );
        $mail->addReplyTo($_POST['email'], $_POST['name']);
        $mail->IsHTML(true);
        $mail->Subject ='New Inquiry';

          $mail->Body= '<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Customer Email From Internet Providors Site</title></head>
        <body><h3>DISCOVER NOW IF YOU HAVE AN UAE ETISALAT HOME INTERNET</h3><p>Customer details</p><table  border="1" style="text-align: center; width: 500px;   background: pink;  color: green;" cellspacing="0" cellpadding="5">
        <tr><th>Customer Name:</th><td>'.$name.'</td></tr><tr><th>EMAIL</th><td>'.$email.'</td></tr><tr><th>Phone:</th><td>'.$mobile.'</td></tr><tr><th>Address:</th><td>'.$address.'</td>
        </tr></table></body></html>';

        if(!$mail->send()){echo "Something Went Wrong: ". $mail->ErrorInfo;}
        else{echo "Email Successfully sent to the Administrator";
        }
        ?>
         <script>
                location.replace('index2.php');
                </script>
                <?php
        

    }catch(Exception $e){$e.getmessage();
        
    }
    }
    
    ?>