<?php
session_start();
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
if (isset($_REQUEST['signup'])) {
    $CNIC = (isset($_POST['CNIC']) ? $_POST['CNIC'] : '');
    $query = mysqli_query($conn, "select * from customer where CNIC='$CNIC' LIMIT 1");
    $rowcount = mysqli_num_rows($query);
    if ($rowcount == true) {
        $firstname = (isset($_POST['firstname']) ? $_POST['firstname'] : '');
        $lastname = (isset($_POST['lastname']) ? $_POST['lastname'] : '');
        $email = (isset($_POST['email']) ? $_POST['email'] : '');
        $password = (isset($_POST['password']) ? $_POST['password'] : '');
        // $CNIC = (isset($_POST['CNIC']) ? $_POST['CNIC'] : '');
        $phonenumber = (isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '');
        $date = (isset($_POST['date']) ? $_POST['date'] : '');
        $month = (isset($_POST['month']) ? $_POST['month'] : '');
        $year = (isset($_POST['year']) ? $_POST['year'] : '');
        $gender = (isset($_POST['gender']) ? $_POST['gender'] : '');
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $v_code = bin2hex(random_bytes(4));
        $_SESSION['username1'] = $email;
        $_SESSION['vcode'] = $v_code;
        $result = mysqli_query($conn, "INSERT INTO `signup`(`Firstname`, `Lastname`, `Email`, `Password`, `CNIC`, `Phonenumber`, `Date`, `Month`, `Year`, `Gender`, `verification_code`) VALUES ('$firstname','$lastname','$email','$hash','$CNIC','$phonenumber','$date','$month','$year','$gender','$v_code')");
        if ($result == true && sendMail($_SESSION['username1'], $_SESSION['vcode'])) {
            echo "<script>alert('Check your email for verification')</script>";
            header("Location:../email_verification.php");
        }
    } else {
        echo "<script>alert('Invalid CNIC..!!!');window.location='/project/customer.php/   '</script>";
    }
}
//php ends
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    <title>sign_up</title>

    <script type="text/javascript">
        function numbersonly(input) {
            var regex = /[^0-9]/g;
            input.value = input.value.replace(regex, "");
        }
    </script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: beige;
        }

        * {
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }

        div.slidebar {
            position: fixed;
            left: -250px;
            width: 250px;
            height: 100%;
            color: rgb(6, 95, 184);
            background: whitesmoke;
            transition: all .5s ease;

        }

        .slidebar header {
            font-size: 22px;
            color: whitesmoke;
            text-align: center;
            line-height: 70px;
            user-select: none;
            margin-top: -110px;
            background: rgb(209, 28, 58);
        }

        .slidebar ul {
            display: block;
            height: 100%;
            width: 100%;
            line-height: 40px;
            font-size: 20px;
            padding-left: 40px;
            transition: 1s ease-in;
        }

        ul li:hover a {

            color: rgb(61, 61, 61);
        }

        a {
            font-size: 18px;
            color: rgb(6, 95, 184);
        }

        .slidebar ul a i {
            margin-right: 16px;
        }

        #check {
            display: none;
        }

        label #btn,
        label #cancel {
            font-size: 10px;
            margin-top: 14px;
            position: absolute;
            cursor: pointer;
            background: rgb(209, 28, 58);
            border-radius: 3px;
        }

        label #btn {

            left: 10px;
            top: 20px;
            font-size: 28px;
            color: white;
            padding: 6px 12px;
            transition: all .5s;
        }

        label #cancel {
            z-index: 1111;
            left: -195px;
            top: 17px;
            font-size: 20px;
            color: whitesmoke;
            padding: 4px 9px;
            transition: all .5s ease;
        }

        #check:checked~.slidebar {
            left: 0;
        }

        #check:checked~label #btn {
            left: 250px;
            opacity: 0;
            pointer-events: none;
        }

        #check:checked~label #cancel {
            left: 200px;
            top: 10px;
        }

        div.header {
            margin-top: 0px;
            margin-left: 0px;
            background-color: whitesmoke;
            text-align: center;
            font-size: 77px;
            animation-name: first;
            animation-duration: 1s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
            animation-timing-function: ease-out;
        }

        @keyframes first {
            from {
                width: 0px;

            }

            to {
                width: 1400px;
            }
        }

        img.pic {
            width: 400px;
            height: 290px;
            margin-top: -90px;
            margin-bottom: -110px;
            text-align: center;
        }

        a.icon {

            margin-top: 30px;
            color: rgb(209, 28, 58);
            font-family: Arial, Helvetica, sans-serif;
        }

        i {

            margin-top: 30px;
            font-size: 20px;
            color: rgb(209, 28, 58);
        }

        i.fa-eye-slash {
            margin-left: -30px;
            font-size: 13px;
            margin-top: 0px;
            color: rgb(209, 28, 58);
        }

        h1.signup {
            font-size: 25px;
            text-align: center;
            color: rgb(209, 28, 58);
            margin-top: 15px;
        }

        h2.des {
            margin-top: 15px;
            text-align: center;
            font-size: 15px;
            color: rgb(209, 28, 58);
        }

        hr {
            margin-top: 25px;
            width: 500px;
            margin-left: 435px;
        }

        input.firstname {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-top: 20px;
            border-radius: 3px;
            width: 160px;
            height: 30px;
            margin-left: 525px;
        }

        input.lastname {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-top: 10px;
            border-radius: 3.5px;
            width: 160px;
            height: 30px;
        }

        input.email {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-top: 10px;
            border-radius: 3.5px;
            width: 330px;
            height: 30px;
            margin-left: 525px;
        }

        input.password {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-top: 10px;
            border-radius: 3.5px;
            width: 330px;
            height: 30px;
            margin-left: 525px;
        }

        input.CNIC {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-top: 10px;
            border-radius: 3.5px;
            width: 330px;
            height: 30px;
            margin-left: 525px;
        }

        input.phonenumber {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-top: 10px;
            border-radius: 3.5px;
            width: 330px;
            height: 30px;
            margin-left: 525px;
        }

        label.Date {

            margin-left: 525px;
            font-size: 13px;
        }

        select.date {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-top: 10px;
            margin-left: 525px;
            width: 100px;
            height: 32px;
        }

        select.month {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-left: 10px;
            width: 100px;
            height: 32px;
        }

        select.year {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-left: 10px;
            width: 100px;
            height: 32px;
        }

        label.Gender {

            margin-left: 525px;
            font-size: 13px;
        }

        fieldset {
            margin-top: 10px;
            display: inline;
        }

        fieldset.F {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-left: 525px;
            width: 95px;
            height: 17px;
            border-radius: 3px;
            padding-top: 5px;
            padding-left: 2px;
            padding-bottom: 5px;
        }

        fieldset.M {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-left: 10px;
            width: 95px;
            height: 17px;
            border-radius: 3px;
            padding-top: 5px;
            padding-left: 2px;
            padding-bottom: 5px;

        }

        fieldset.C {
            background-color: rgb(240, 240, 240);
            border-style: groove;
            border-color: rgb(238, 238, 238);
            margin-left: 10px;
            width: 95px;
            height: 17px;
            border-radius: 3px;
            padding-top: 5px;
            padding-left: 2px;
            padding-bottom: 5px;
        }

        input.f {
            margin-left: 20px;
            position: relative;
        }

        input.ma {
            margin-left: 32px;
            position: relative;
        }

        input.c {
            margin-left: 15px;
            position: relative;
        }

        input.button {
            margin-top: 15px;
            border-radius: 50px;
            background-color: rgb(209, 28, 58);
            color: rgb(245, 245, 245);
            margin-left: 655px;
            border-style: none;
            width: 75px;
            height: 34px;
        }

        .button:hover {
            background-color: rgb(221, 43, 73);
        }

        #message {
            font-family: 'Roboto', sans-serif;
            margin-left: 525px;
            color: rgb(209, 28, 58);
            font-size: 14px;
            display: none;
        }
        button{
            margin-left: 540px;
            margin-top:30px;
            width:300px;
            height:30px;
        }
    </style>

</head>

<body>
    <div class="header">
        <header><img class="pic" src="../pic.png" alt=""></header>
    </div>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="slidebar">
        <header>HBL App</header>
        <ul>
            <li><a href="Dashboard/front_page.html"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="sign_in.php"><i class="fas fa-link"></i>Sign In</a></li>
            <li><a href="Feature.php"><i class="fas fa-stream"></i>Feature</a></li>
            <li><a href="FAQs.php"><i class="fas fa-calendar-week"></i>FAQs</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i>Help</a></li>
            <li><a href="security.php"><i class="fas fa-sliders-h"></i>Security</a></li>
            <li><a href="contact.php"><i class="fas fa-envelope"></i>Contact</a></li>
            <li><a
                    href="https://www.google.com/maps/place/Information+Technology+University+(ITU)/@31.4756261,74.3397917,17z/data=!3m1!4b1!4m6!3m5!1s0x39190427235b67ed:0x80c2ec5016353f7d!8m2!3d31.4756215!4d74.3419804!16s%2Fg%2F11c5_x0y6s"><i
                        class="fas fa-location-pin"></i>Locate Us</a></li>
        </ul>
    </div>
    <div class="form">
        <form action="" method="post">
            <h1 class="signup">Sign Up</h1>
            <h2 class="des">Please Enter your Personal Information</h2>
            <hr>
            <div>
                <input class="firstname" type="text" name="firstname" required placeholder="Firstname">
                <input class="lastname" type="text" name="lastname" required placeholder="Lastname">
            </div>
            <div><input class="email" type="email" name="email" required placeholder="Email"></div>
            <div>
                <input class="password" id="password" type="password" name="password" required placeholder="Password">
                <label onclick="showpassword()">
                    <i id="hide1" class="fa fa-eye-slash"></i>
                </label>
            </div>
            <script>
                function showpassword() {
                    var x = document.getElementById("password");
                    var z = document.getElementById("hide1");
                    if (x.type == 'password') {
                        x.type = 'text';
                        y.style.display = "visible";
                    }
                    else {
                        x.type = "password";
                        y.style.display = "block";
                    }
                }
            </script>
            <div>
                <p id="message">Password is <span id="strength"></span></p>
            </div>
            <script>
                var pass = document.getElementById("password");
                var msg = document.getElementById("message");
                var str = document.getElementById("strength");
                pass.addEventListener('input', () => {
                    if (pass.value.length > 0) {
                        msg.style.display = "block";
                    }
                    else {
                        msg.style.display = "none";
                    }
                    if (pass.value.length < 6) {
                        str.innerHTML = "weak";
                        msg.style.color = "rgb(209, 28, 58)";
                    }
                    else if (pass.value.length >= 7) {
                        str.innerHTML = "strong";
                        msg.style.color = "green";
                    }
                })
            </script>
            <div><input class="CNIC" type="text" name="CNIC" onclick="numbersonly(this)"
                    data-inputmask="'mask':'99999-9999999-9'" required placeholder="CNIC"></div>
            <script type="text/javascript">
                $(':input').inputmask();
            </script>
            <div><input class="phonenumber" type="text" name="phonenumber" required placeholder="Phone number"
                    onclick="numbersonly(this)" data-inputmask="'mask':'+99-999-9999999'"></div>
            <script type="text/javascript">
                $(':input').inputmask();
            </script>
            <div>
                <label for="" class="Date">Date of birth</label>
                <br>
                <select class="date" name="date" id="">
                    <option value="01">1</option>
                    <option value="02">2</option>
                    <option value="03">3</option>
                    <option value="04">4</option>
                    <option value="05">5</option>
                    <option value="06">6</option>
                    <option value="07">7</option>
                    <option value="08">8</option>
                    <option value="09">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                <select class="month" name="month" id="">
                    <option value="01">January</option>
                    <option value="02">Feburary</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <select class="year" name="year" id="">
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <div>
                <label for="" class="Gender">Gender</label>
                <br>
                <fieldset class="F"><label for="">Female</label><input class="f" type="radio" name="gender" required
                        value="Female"></fieldset>
                <fieldset class="M"><label for="">Male</label> <input class="ma" type="radio" name="gender" required
                        value="Male"></fieldset>
                <fieldset class="C"><label for="">Custom</label> <input class="c" type="radio" name="gender" required
                        value="Custom"></fieldset>

            </div>
            <div><button type="Submit" name="signup"> Sign Up</button></div>


        </form>
    </div>
</body>

</html>