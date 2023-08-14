<?php 
          //*************************  USER Submit  *****************
   
    if (isset($_POST['submit']))
    {
      // fetching data from the input boxes.
      $name = $_POST['name']; 
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $product = $_POST['product'];
      $message = $_POST['message'];

      // connecting to the database
      include('connect.php'); 
      mysqli_query($conn, "insert into users(name,phone,email,product,message) 
                  values ('$name','$phone','$email','$product','$message')");

      if(mysqli_affected_rows($conn)==1)
      {
        echo "<center style='color:green; font-size:20px;'><b></b></center>";
      }
      else
      {
        echo "<center style='color:red; font-size:20px;'>Sorry!! Unable to submit data, Please Try Again.....</center>";
      }

      // sending mail through PHPMailer and SMTP
        $html="<table>
                  <tr><td>Name:<td><td>$name<td></tr>
                  <tr><td>Phone No:<td><td>$phone<td></tr>
                  <tr><td>Email:<td><td>$email<td></tr>
                  <tr><td>Product:<td><td>$product<td></tr>
                  <tr><td>Message:<td><td>$message<td></tr>
                 
                </table>";
        include('smtp/PHPMailerAutoload.php');
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->Port=587;
        $mail->SMTPSecure="tls";
        $mail->SMTPAuth=true;
        $mail->Username="iwswatersolutions@gmail.com";
        $mail->Password="gqravksbdhdpyxpr";
        $mail->SetFrom("iwswatersolutions@gmail.com");
        $mail->addAddress("waterpurifieronrental@gmail.com "); //receiver email address
        $mail->IsHTML(true);
        $mail->Subject="Customer Booking Details"; // Subject of Email      
        $mail->Body=$html; 
        $mail->SMTPOptions=array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed'=>false)); 
        if($mail->send()){
          // echo "Mail send";
        }else{
          // echo "Error occur";
        }
       
       
        

    }
   ?>




