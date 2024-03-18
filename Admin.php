<?php
session_start();
$conn=mysqli_connect("localhost","root","","project") or die("Connection failed");
if (isset($_REQUEST['btn1'])) {
    $CNIC = (isset($_POST['f1']) ? $_POST['f1'] : '');

    $res = mysqli_query($conn, "INSERT INTO customer (CNIC)
    VALUES ('$CNIC')");

        echo "<script>alert('CNIC interested!');window.location='/Project/Admin.php/'</script>";
    
}  
if (isset($_REQUEST['btn2'])) {
    $CNIC = (isset($_POST['f2']) ? $_POST['f2'] : '');

    $res = mysqli_query($conn, "DELETE FROM customer WHERE CNIC='$CNIC'");

        echo "<script>alert('Account deleted!');window.location='/Project/Admin.php/'</script>";
    
}  
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>SignIn</title>
    <style>
        body{
            font-family: 'Roboto', sans-serif; 
            background-color: beige;
        }
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
        }
        div.slidebar{
            position: fixed;
            left: -250px;
            width: 250px;
            height: 100%;
            color: rgb(6, 95, 184);
            background: whitesmoke;
            transition: all .5s ease;
            
        }
        .slidebar header{
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
        ul li:hover a{
            
            color: rgb(61, 61, 61);
        }
        a{
            font-size: 18px;
            color:rgb(6, 95, 184);
        }
        .slidebar ul a i{
            margin-right: 16px;
        }
        #check{
            display: none;
        }
        label #btn,label #cancel{
            font-size: 10px;
            margin-top: 14px;
            position: absolute;
            cursor: pointer;
            background: rgb(209, 28, 58);
            border-radius: 3px;
        }
        label #btn{
            
            left: 10px;
            top: 20px;
            font-size: 28px;
            color: white;
            padding: 6px 12px;
            transition: all .5s;
        }
        label #cancel{
            z-index: 1111;
            left: -195px;
            top: 17px;
            font-size: 20px;
            color: whitesmoke;
            padding: 4px 9px;
            transition: all .5s ease;
        }
        #check:checked ~ .slidebar{
            left: 0;
        }
        #check:checked ~ label #btn{
            left: 250px;
            opacity: 0;
            pointer-events: none;
        }
        #check:checked ~ label #cancel{
            left: 200px;
           top:10px;
        }
        div.header{
        margin-top: 0px;
        margin-left: 0px;
        background-color:whitesmoke;
        text-align: center;
        font-size: 77px;
        animation-name: first;
        animation-duration: 1s;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-timing-function: ease-out;
        }
        @keyframes first {
        from{
               width: 0px;
              
        } to{
                 width:1400px;
        }
      }
      img.pic{
        width: 400px;
        height: 290px;
        margin-top: -90px;
        margin-bottom: -110px;
        text-align: center;
      }


      .ainput{
            border-style: groove;
            border-color: white;
            margin-top: 20px;
            margin-left: 500px;
            width:400px;
            height: 35px;
            border-radius: 4px;
            outline: none;
            box-sizing: border-box;
            background: none;
            font-family: Arial, Helvetica, sans-serif;
           
        }
        .ainput:focus ~ .inputLabel:before{
            color: rgb(209, 28, 58);
            top:-22px;
            left:-380px;
            z-index: 1;
            transition: 0.2s ease;
            font-size:14px;
         }
        .ainput:focus{
            border: 2px solid rgb(209, 28, 58);
        }
        .inputLabel{
            position: relative;
        }
        .inputLabel:before{
            font-family: Arial, Helvetica, sans-serif;
            content:"Username";
            position:absolute;
            color:rgb(90, 86, 86);
            z-index: -1;
            left:-380px;
            top:0px;
            transition: 0.1s ease;
            box-sizing: border-box;
        }

        .binput{
            border-style: groove;
            border-color: white;
            margin-top: 20px;
            margin-left: 500px;
            width:400px;
            height: 35px;
            border-radius: 4px;
            outline: none;
            box-sizing: border-box;
            background: none;
            font-family: Arial, Helvetica, sans-serif;
        }
        .binput:focus ~ .inputLabel1:before{
            color: rgb(209, 28, 58);
            top:-22px;
            left:-380px;
            z-index: 1;
            transition: 0.2s ease;
            font-size:14px;
         }
        .binput:focus{
            border: 2px solid rgb(209, 28, 58);
        }
        .inputLabel1{
            position: relative;
        }
        .inputLabel1:before{
            font-family: Arial, Helvetica, sans-serif;
            content:"Password";
            position:absolute;
            color:rgb(90, 86, 86);
            z-index: -1;
            left:-380px;
            top:0px;
            transition: 0.1s ease;
            box-sizing: border-box;
        }
        button{
            font-family: Arial, Helvetica, sans-serif;
            background-color: gray;
            border-radius: 3px;
            margin-left: 630px;
            margin-top: 20px;
            color: rgb(243, 243, 243);
            border-style: none;
            height: 30px;
            width: 100px;
        }
        input.button1{
            width: 100px;
            height: 30px;
            color: rgb(243, 243, 243);
            border-style: none;
            background-color: rgb(209, 28, 58);
            border-radius: 3px;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 200px;
        }
        a.icons{
            margin-top: 30px;
            color: rgb(209, 28, 58);
            font-family: Arial, Helvetica, sans-serif;
        }
        a.icon{
            margin-left: 10px;
            margin-top: 30px;
            color: rgb(209, 28, 58);
            font-family: Arial, Helvetica, sans-serif;
        }
        i{
            
            margin-top: 30px;
           font-size: 20px;
           color:rgb(209, 28, 58);
        }
        label.hr{
            color:rgb(90, 86, 86);
        padding-top: 110px;
        margin-left: 500px;
       
        }
        hr{
            margin-top: 20px;
            width: 400px;
            margin-left: 500px;
        }
        label.follow{
            color:rgb(90, 86, 86);
            margin-left: 580px;
        }
        p.start{
            margin-top: 50px;
            color: rgb(209, 28, 58);
            margin-left: 563px;
            font-size: 20px;
        }
        label.d{
            
            color:rgb(90, 86, 86);
            margin-left: 500px;
        }
a.forgot{
    font-size:15px;
    color:rgb(209, 28, 58);
     margin-left: 500px;
}
    </style>
 
</head>
<body>
    <div class="header"><header><img class="pic" src="../pic.png" alt=""></header></div>
    <input type="checkbox" id="check">
    <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="slidebar">
        <header>IBL App</header>
        <ul>
            <li><a href="Dashboard/front_page.html"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="customer.php"><i class="fas fa-link"></i>Sign Up</a></li>
            <li><a href="Feature.php"><i class="fas fa-stream"></i>Feature</a></li>
            <li><a href="FAQs.php"><i class="fas fa-calendar-week"></i>FAQs</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i>Help</a></li>
            <li><a href="security.php"><i class="fas fa-sliders-h"></i>Security</a></li>
            <li><a href="contact.php"><i class="fas fa-envelope"></i>Contact</a></li>
            <li><a href="https://www.google.com/maps/place/Information+Technology+University+(ITU)/@31.4756261,74.3397917,17z/data=!3m1!4b1!4m6!3m5!1s0x39190427235b67ed:0x80c2ec5016353f7d!8m2!3d31.4756215!4d74.3419804!16s%2Fg%2F11c5_x0y6s"><i class="fas fa-location-pin"></i>Locate Us</a></li>
        </ul>
    </div>
    <div class="form">
    <form action="" method="post">
        <p class="start">Welcome to Admin Page</p>
        <br>
        <label for=""class="d">Register an account brom CNIC</label>
        <br>
        
        <input type="text" class="ainput" name="f1"  placeholder="Enter CNIC">
        <br>    
        <br>
        <button name="btn1" >Add Account</button>
        <hr color="beige">

        <label for=""class="d">Delete a Registered account</label>
        <br>
        
        <input type="text" class="ainput" name="f2"  placeholder="Enter CNIC">
        <br>    
        <br>
        <button name="btn2" >Remove Account</button>
        <hr>

        <label for=""class="hr">Download HBL Mobile</label>
        <i  class="fa-brands fa-google-play"></i> <a class="icons" href="https://play.google.com/store/games?utm_source=apac_med&utm_medium=hasem&utm_content=Jun0122&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-pk-1003227-med-hasem-py-Evergreen-Jun0122-Text_Search_BKWS-BKWS%7CONSEM_kwid_43700071429380597_creativeid_601100159720_device_c&gclid=Cj0KCQiApb2bBhDYARIsAChHC9tBXPtlpNt-GFEba7MydvG5YzNsT_cjWCVB9BGRRmEGXvwEUcTWWBIaAlzXEALw_wcB&gclsrc=aw.ds">Google play</a> 
        <i  class="fa-brands fa-apple"></i> <a class="icons" href="https://www.apple.com/app-store/">App Store</a>
        <br>
        <hr> 
        <label for="" class="follow">Follow us on  </label>
        <i  class="fa-brands fa-facebook"></i> <a class="icon" href="https://www.facebook.com/"></a> 
        <i  class="fa-brands fa-instagram"></i> <a class="icon" href="https://www.instagram.com/"></a>
        <i  class="fa-brands fa-linkedin"></i> <a class="icon" href="https://www.linkedin.com/"></a> 
        <i  class="fa-brands fa-twitter"></i> <a class="icon" href="https://twitter.com/"></a>
        <i  class="fa-brands fa-youtube"></i> <a class="icon" href="https://www.youtube.com/"></a>
       
    </form>
</div>
</body>
</html>