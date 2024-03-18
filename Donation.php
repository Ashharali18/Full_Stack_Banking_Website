<?php
session_start();
$us = $_SESSION['user_name'];

//php start
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendMail($Email, $v_code)
{

    require('Exception.php');
    require('PHPMailer.php');
    require('SMTP.php');

    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'nauman170462@gmail.com'; //SMTP username
        $mail->Password = 'asloigfrszjexzmc'; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('nauman170462@gmail.com', 'ITU BANK LIMITED');
        $mail->addAddress($Email, $v_code); //Add a recipient

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'EMAIL VERIFICATION ';
        $mail->Body = "Verify your email for ITU BANK LIMITED<br>
    Your Email verification code is :  $v_code";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
$conn = mysqli_connect("localhost", "root", "", "project") or die("Connection failed");
if (isset($_REQUEST['btn'])) {
    $acc_num = (isset($_POST['f2']) ? $_POST['f2'] : '');
    $query = mysqli_query($conn, "select * from accounts where Username='$us'  ");
    $rowcount = mysqli_num_rows($query);
    if ($rowcount == true) {
        $bankname = (isset($_POST['f1']) ? $_POST['f1'] : '');
        $amount = (isset($_POST['f3']) ? $_POST['f3'] : '');
        $purpose = (isset($_POST['f4']) ? $_POST['f4'] : '');
        $v_code = bin2hex(random_bytes(4));

        $_SESSION['vcode'] = $v_code;

        $result = mysqli_query($conn, "INSERT INTO `transaction`(R_Acc_num, T_purpose, D_Category,L_purpose,Amount, Username, Bank_name,verification_code) VALUES ('$acc_num','0','$purpose','0','$amount', '$us','$bankname','$v_code')");
        $result2 = mysqli_query($conn, "UPDATE Accounts SET Amount=Amount-$amount WHERE Username='$us'");
        if ($result == true && sendMail($_SESSION['user_name'], $_SESSION['vcode']) ) {

            header("Location:../donation_confirmation.php/");
        }
    }
    else {
        echo "<script>alert('Invalid Information..!!!');window.location='/Project/Funds_transfer.php/'</script>";
    }}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ms+Madi&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    /* * {
            font-family: 'Ms Madi', cursive;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Roboto', sans-serif;
        }  */
        .container1,.container2{
            font-family: 'Verdana', sans-serif;
            display: inline;
            display: inline-block;
        }
    *{
        margin: 0;
        padding: 0;
    }
    .image {
  width: 1900px;
  height: 924px;
  background: url("../Donation.JPG"), rgb(255, 232, 99);
  background-blend-mode: multiply;
  background-size: cover;
  z-index: 1;
}
.mainbox{
    z-index: 2;
}
.c1{
    width: 1900px;
    height: 110px;
    background-color: white;
    display: ;

}
.c1 img{
    margin-left: 800px;
   margin-top: 24px;
    width: 280px;
    height: 70px;
}
/* .c1 button{
    margin-top: 0px;
    background-color: rgb(243, 207, 4);
    color: Black;
    width: 200px;
    height: 50px;
    border-radius: 10px;
    font-size: large;
    
} */
.c2 p{
     margin-left: 220PX;
     margin-top: 280PX;
     font-size: 60px;
     font-weight: 500;
     
}
.c3 p{
    margin-left: 220px;
    font-size: 25px;
}

      /* html, body {
      min-height: 100%;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      } */
      h1 {
      margin: 0 0 20px;
      font-weight: 400;
      color: rgb(209, 28, 58);
      }
      p {
      margin: 0 0 5px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: rgb(209, 28, 58);
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #f5f5f5; 
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      .fa-envelope {
      transform: rotate(-20deg);
      }
      .fa-at , .fa-mail-bulk{
      transform: rotate(10deg);
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid rgb(209, 28, 58);
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      .form-inner button {
      width: 100%;
      padding: 10px;
      border: none;
      background: rgb(209, 28, 58); 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #929596;
      }    
      @media (min-width: 568px) {
      .main-block {
      flex-direction: row;
      }
      .left-part, form {
      width: 50%;
      }
      .fa-envelope {
      margin-top: 0;
      margin-left: 20%;
      }
      .fa-at {
      margin-top: -10%;
      margin-left: 65%;
      }
      .fa-mail-bulk {
      margin-top: 2%;
      margin-left: 28%;
      }
      }
    /* .container2{
       display: inline-block;
         margin-bottom: 3000px; 
        margin-left: 255px;
        font-size: large;
        
    } */
    form{
        margin-top:200px;
        float: right;
        margin-left:0px;
        
    }
    .back_button button{
            margin-left: 1180px;
            width: 500px;
            height: 60px;
            font-size: Large;
            background-color: rgb(243, 207, 4);
            border-radius: 5px;
    }
.c2 p{
    color: white;
}
.c3 p{
    color: white;
}
</style>
<body>
  <div class="image">
   <div class="mainbox">
<div class="c1">
    <img src="../logo2.JPG" alt="">

</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
</div>
<div class="container1">
    <div class="c2">
        <p><b>Donate easily <br> & conveniently</b> </p>
    </div>
    <div class="c3">
        <p>Easy and secure way to send and recieve your <br> money in short time</p>
    </div>
</div>
<div class="container2">
    <form  class="decor" method="post">
        <div class="form-left-decoration"></div>
        <div class="form-right-decoration"></div>
        <div class="circle"></div>
        <div class="form-inner">
          <h1>Donate</h1>
          <input type="text" placeholder="Bank Name" name="f1">
          <input type="text" placeholder="Account number" name="f2">
          <input type="text" placeholder="Amount" name="f3">
          <input type="Select" placeholder="Organization" name="f4">
          <button type="submit" name="btn" >Next</button>
        </div>
      </form>
      
   </div>
   <div class="back_button">
    <button>Go back to home page</button>
   </div>
  </div>

</body>
</html>