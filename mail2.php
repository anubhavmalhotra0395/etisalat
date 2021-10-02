<?php
include 'connection.php';
	if(isset($_POST['submit3']))
	{
		$name=$_POST['namepop'];
		$mobile=$_POST['phonepop'];
		$to_email = "uaehomeinternetttf@gmail.com";
		$subject = "New inquiry";
		$headers = "";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
		  $msg = '<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">
        <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Customer Email From Internet Providors Site</title>
        </head>
        <body> 
        <h3>DISCOVER NOW IF YOU HAVE AN UAE ETISALAT HOME INTERNET</h3>
        <p>Customer details</p>
        <table  border="1" style="text-align: center; width: 500px;   background: pink;  color: green;" cellspacing="0" cellpadding="5">
        <tr>
        <th>Customer Name:</th>
        <td>'.$_POST['namepop'].'</td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td>'.$_POST['phonepop'].'</td>
        </tr>
        </table>
        </body>
    </html>
    ';
		if (mail($to_email,$subject,$msg, $headers))
		{
   			echo "Email successfully sent to the Administrator";
		} 	
		else 
		{
   			echo "Email sending failed...";
		}

				?>
				<script>
				location.replace('index2.php');
				</script>
				<?php
		}
	?>
