<?php
session_start();
// if(isset($_REQUEST['btn'])){
//     header("Location:../log_out.php");}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bank Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ms+Madi&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
    <style>
        * {
            font-family: 'Ms Madi', cursive;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Roboto', sans-serif;
        }

        p {
            display: inline;
        }

        .m {
            margin-top: 0px;
            margin-left: 10px;
            display: inline-block;
            margin-bottom: 23px;
            width: auto;

        }

        .logo {
            display: inline-block;
            width: 10px;
            margin-left: 40px;

        }

        .c1 {
            margin: 0;
            padding: 0;
            width: 480px;
            height: 90px;
            background-color: rgb(255, 255, 255);
            box-shadow: 0 8px 6px -6px rgb(108, 107, 107);
            float: left;
            margin-right: 0px;

        }

        .m {
            margin-top: 30px;
            cursor: pointer;
        }

        .bar1,
        .bar2,
        .bar3 {
            width: 25px;
            height: 3px;
            background-color: rgb(111, 117, 122);
            margin: 6px 0;
            transition: 0.4s;
        }

        /* Rotate first bar */
        .change .bar1 {
            transform: translate(0, 9px) rotate(-45deg);
        }

        /* Fade out the second bar */
        .change .bar2 {
            opacity: 0;
        }

        /* Rotate last bar */
        .change .bar3 {
            transform: translate(0, -9px) rotate(45deg);
        }

        .c2 {
            border-width: 2px;
            width: 1395px;
            height: 58px;
            border-color: rgb(209, 28, 58);
            border-style: solid;
            box-shadow: 0 8px 6px -6px grey;
            display: inline-block;
            background-color: rgb(209, 28, 58);
            color: rgb(255, 255, 255);
            font-size: x-large;
            padding-left: 20px;
            padding-top: 30px;

        }

        .c2 button{
            margin-top: 0px;
            background-color: rgb(243, 207, 4);
            color: black;
            font-size: large;
            border-radius: 10px;
        }

        .c2 a {
            color: white;
            text-decoration: none;
            font-size: larger;
        }

        .c2 a:hover {
            color: grey;
        }

        body {
            background-color: rgb(225, 225, 225);
            margin: 0;
            padding: 0;

        }

        .c3 {
            font-size: 20px;
            margin-top: 50px;
            margin-left: 140px;
            color: rgb(70, 70, 70);
            float: left;
        }

        .c3i {
            width: 450px;
            height: 350px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
        }



        .c4 {
            font-size: 20px;
            margin-top: 50px;
            margin-left: 70px;
            color: rgb(70, 70, 70);
            float: left;

        }

        .c4i {
            width: 125px;
            height: 125px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            padding-left: 60px;
            padding-top: 40px;
            text-decoration: none;
        }


        .c4ii {

            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-left: 12.5px;
            width: 85px;
            height: 65px;
            padding: 50px 50px;
        }

        .c4iii {
            width: 85px;
            height: 65px;
            padding: 50px 50px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-left: 12.5px;

        }

        .c4iv {
            width: 85px;
            height: 65px;
            padding: 50px 50px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-top: 12.5px;
        }

        .c4v {
            width: 115px;
            height: 135px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-left: 12.5px;
            margin-top: 12.5px;
            padding-left: 70px;
            padding-top: 30px;
           
        }

        .c4vi {
            width: 068px;
            height: 84px;
            padding: 40px 60px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-left: 12.5px;
            margin-top: 12.5px;
        }

        .c4i:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c4ii:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c4iii:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c4iv:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c4v:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c4vi:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c4 img {
            width: 70px;
            height: auto;
        }

        .c4 p {
            font-size: smaller;
        }

        .c4v img {
            width: 55px;
            height: auto;
        }

        button {
            width: 200px;
            height: 45px;
            margin-left: 10px;
            margin-top: 10px;
            background-color: rgb(209, 28, 58);
            color: White;
        }

        button:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c5 {
            font-size: 20px;
            margin-top: 50px;
            margin-left: 70px;
            color: rgb(70, 70, 70);
            float: left;
        }

        .c5i {
            width: 450px;
            height: 350px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
        }

        .circle {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            border: 1px solid;
            border-color: rgb(209, 28, 58);
            background-color: rgb(209, 28, 58);
            opacity: 0.5;
            margin-left: 120px;
            margin-top: 50px;
        }

        .c3i p {
            margin-left: 150px;
        }
       

        .c6 {
            font-size: 20px;
            margin-top: 50px;
            margin-left: 140px;
            color: rgb(70, 70, 70);
            float: left;
            
        }


        .c6i {
            width: 450px;
            height: 40px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            text-decoration: none;
            font-size: larger;
            text-align: left;
            padding-top: 10px;
        }


        .c6ii {
            width: 450px;
            height: 40px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            text-decoration: none;
            font-size: larger;
            text-align: left;
            padding-top: 10px;
            margin-top: 9px;
        }

        .c6iii {
            width: 450px;
            height: 40px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            text-decoration: none;
            font-size: larger;
            text-align: left;
            padding-top: 10px;
            margin-top: 9px;
        }

        .c6iv {
            width: 450px;
            height: 40px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            text-decoration: none;
            font-size: larger;
            text-align: left;
            padding-top: 10px;
            margin-top: 9px;
        }

        .c6i:hover {
            color: white;
            background-color: rgb(209, 28, 58);
            border-color: rgb(209, 28, 58);
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c6ii:hover {
            color: white;
            background-color: rgb(209, 28, 58);
            border-color: rgb(209, 28, 58);
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c6iii:hover {
            color: white;
            background-color: rgb(209, 28, 58);
            border-color: rgb(209, 28, 58);
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c6iv:hover {
            color: white;
            background-color: rgb(209, 28, 58);
            border-color: rgb(209, 28, 58);
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }
        .c7 {
            font-size: 20px;
            margin-top: 50px;
            margin-left: 70px;
            color: rgb(70, 70, 70);
            float: left;

        }

        .c7i {
            width: 134px;
            height: 130px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            padding-left: 50px ;
            padding-top: 30px;
            
            text-decoration: none;
        }


        .c7ii {

            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-left: 12.5px;
            width: 85px;
            height: 65px;
            padding: 50px 50px;
        }

        .c7iii {
            width: 132px;
            height: 125px;
            padding-left: 55px;
            padding-top: 40px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-left: 12.5px;

        }

        .c7iv {
            width: 85px;
            height: 65px;
            padding: 50px 50px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-top: 12.5px;
        }

        .c7v {
            width: 46px;
            height: 74px;
            padding: 45px 70px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-left: 12.5px;
            margin-top: 12.5px;
        }

        .c7vi {
            width: 068px;
            height: 84px;
            padding: 40px 60px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
            margin-left: 12.5px;
            margin-top: 12.5px;
        }

        .c7i:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c7ii:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c7iii:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c7iv:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c7v:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c7vi:hover {
            box-shadow: 0px 0px 12px 12px rgb(163, 162, 162);
        }

        .c7 img {
            width: 70px;
            height: auto;
        }

        .c7 p {
            font-size: smaller;
        }

        .c7v img {
            width: 55px;
            height: auto;
        }
        .c8 {
            font-size: 20px;
            margin-top: 50px;
            margin-left: 70px;
            color: rgb(70, 70, 70);
            float: left;
        }

        .c8i {
            width: 450px;
            height: 350px;
            background-color: White;
            border-width: 2px;
            border-radius: 5px;
            border-color: rgb(255, 255, 255);
            border-style: solid;
            float: left;
        }
        select{
            margin-left: 30px;
            width: 380px;
            height: 40px;
            text-align: center;
            font-size: larger;
        }
        hr{
           
  border-top: 1px solid rgb(191, 187, 187);

        }
        .c8 button{
            margin-left:130px;
            margin-top: 100px;
        }
        .c6 button{
            width: 455px;
            margin-left: 0px;
        }
    </style>
</head>

<body>
    <header>
        <div class="c1">
            <div class="m" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <div class="logo">
                <img src="../logo2.JPG" alt="">
            </div>
        </div>

        <div class="c2">
           
            <?php echo "Welcome ".  $_SESSION['user_name']; ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
            <a href='../log_out.php'>log out</a>
                    <!-- <button name="btn" type="Submit" h>Log Out</button>  -->
                
          
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="active" href="#"><i class="fa fa-fw fa-home"></i></a>
            <a href="#"><i class="fa fa-fw fa-search"></i></a>
            <a href="#"><i class="fa fa-fw fa-envelope"></i> </a>
            <a href="#"><i class="fa fa-fw fa-user"></i> </a>

        </div>


        <div class="c3">
            <p> <b>Accont Summary</b> </p>
            <br><br>
            <div class="c3i">
                <div class="circle">
                </div>
                <br>
                <p><b>Amount:</b>xyz</p>

            </div>
        </div>

        <div class="c4">
            <p> <b>Payment</b> </p>
            <br><br>
            <div class="c4i">
                <a href="#"><img src="../icon6.JPG" alt="">
                </a>
                <p>Favourites</p>

            </div>
            <div class="c4ii">
                <a href="#"><img src="../icon3.JPG" alt="">
                </a>
                <p>Credit Card payment</p>

            </div>
            <div class="c4iii">
                <a href="../Funds_transfer.php/"><img src="../icon4.JPG" alt="">
                </a>
                <p>Transfer funds</p>

            </div>
            <br>
            <div class="c4iv">
                <a href="../Donation.php/"><img src="../icon2.JPG" alt="">
                </a>
                <p>Donations</p>

            </div>
            <div class="c4v">
                <a href="#"><img src="../icon1.JPG" alt="">
                </a>
                <br>
                <p>Phone <br> touchup</p>

            </div>
            <div class="c4vi">
                <a href="#"><img src="../icon5.JPG" alt="">
                </a>
                <p>Bill Payment</p>

            </div>
        </div>
        <div class="c5">
            <p> <b>My Qr</b> </p>
            <br><br>
            <div class="c5i">
                Select Amount
                <br>
                <button>Download Qr</button>
                <button>Generate Qr with Amount</button>
            </div>
        </div>

        <div class="c6">
            <p> <b>My Accounts</b> </p>
            <br><br>
            <div class="c6i">
                <a href="#">
                </a>
                <p>Current and savings</p>

            </div>
            <div class="c6ii">
                <a href="#">
                </a>
                <p>Credit Card</p>

            </div>
            <div class="c6iii">
                <a href="#">
                </a>
                <p>Terms and deposits</p>

            </div>

            <div class="c6iv">
                <a href="#">
                </a>
                <p>Loan and finance</p>
            </div>
            <div class="st">
                <button>View bank statement</button>
            </div>
            
        </div>
        
        <div class="c7">
            <p> <b>Quick Access</b> </p>
            <br><br>
            <div class="c7i">
                <a href="../loan.php/"><img src="../icon10.JPG" alt="">
                </a>
                <br>
                <p>Payday loan</p>

            </div>
            <div class="c7ii">
                <a href="#"><img src="../icon11.JPG" alt="">
                </a>
                <p>Pay anyone</p>

            </div>
            <div class="c7iii">
                <a href="#"><img src="../icon12.JPG" alt="">
                </a>
                <br>
                <p>Raast management</p>

            </div>
            <br>
            <div class="c7iv">
                <a href="#"><img src="../icon13.JPG" alt="">
                </a>
                <p>Mutual Fund</p>

            </div>
            <div class="c7v">
                <a href="#"><img src="../icon14.JPG" alt="">
                </a>
                <p>Debit Card</p>

            </div>
            <div class="c7vi">
                <a href="#"><img src="../icon15.JPG" alt="">
                </a>
                <p>Bill Payment</p>

            </div>
        </div>
        <div class="c8">
            <p> <b>Mini statement</b> </p>
            <br><br>
            <div class="c8i">
                <p>Select Account</p>
                <br>
                <select name="Accounts" id="Accounts">
                    <option value="a1">1234567812345678</option>
                    
                  </select>
                  <hr>  
                  <button>Click to view</button>

            </div>
        </div>


    </header>
</body>

</html>