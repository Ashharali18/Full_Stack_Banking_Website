<?php
//php start
$conn=mysqli_connect("localhost","root","","project") or die("Connection failed");
if(isset($_REQUEST['next'])){
    $CNIC = (isset($_POST['CNIC']) ? $_POST['CNIC'] : '');
    $query=mysqli_query($conn,"select * from customer where CNIC='$CNIC' LIMIT 1");
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true){
        header("Location:../sign_up.php/");
    }
    else{
       echo "<script>alert('You does not have any account register with this CNIC');window.location='/project/customer.php'</script>";
    }
    
}
//php end
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
    <title>Customer</title>    
   
        <script type="text/javascript">
            function numbersonly(input){
               var regex=/[^0-9]/g;
               input.value=input.value.replace(regex,"");
            }
           </script>
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
a.icon{
    
    margin-top: 30px;
    color: rgb(209, 28, 58);
    font-family: Arial, Helvetica, sans-serif;
}
i{
    
    margin-top: 30px;
   font-size: 20px;
   color:rgb(209, 28, 58);
}
h1.signup{
    font-size: 25px;
    text-align: center;
    color: rgb(209, 28, 58);
    margin-top: 15px;
}
h2.des{
    margin-top: 15px;
    text-align: center;
    font-size: 15px;
    color: rgb(209, 28, 58);
}
hr{
    margin-top: 25px;
    width: 500px;
    margin-left: 435px;
}
img.credit{
    height: 300px;
    margin-top: -60px;
    margin-left: 470px;
}
header.data{
    margin-top: -30px;
    border-radius: 5px;
    margin-left: 530px;
    background-color:beige;
    height: 100px;
    width: 350px;
    border-color: beige;
}
input.cnic{
    outline: none;
    background-color: rgb(245, 245, 245);
    width: 330px;
    height: 35px;
    border-style: none;
    border-radius: 5px;
 }
 #iconnn {
    margin-top: 10px;
    color:rgb(209, 28, 58);
 }
 p.disclaimer{
    color: rgb(209, 28, 58);
    font-size: 15px;
 }
 input.next{
    margin-top: 15px;
    border-radius: 50px;
    background-color: rgb(209, 28, 58); 
    color: rgb(245, 245, 245);
    margin-left: 670px;
    border-style: none;
    width: 75px;
    height: 34px;
 }
 .next:hover{
    background-color: rgb(221, 43, 73); 
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
        <header>HBL App</header>
        <ul>
            <li><a href="Dashboard/front_page.html"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="sign_in.php"><i class="fas fa-link"></i>Sign In</a></li>
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
         <h1 class="signup">Sign Up</h1>
         <h2 class="des">Please enter your CNIC Number/Customer ID</h2>
         <hr>
         <img class="credit" src="../pic1.png" alt="">
         <header class="data">
            <input class="cnic" type="text" name="CNIC" onclick="numbersonly(this)" data-inputmask="'mask':'99999-9999999-9'" required placeholder="Enter your CNIC">
            <script type="text/javascript">
                $(':input').inputmask();
            </script>
            <p class="disclaimer"><i id="iconnn" class="fas fa-exclamation-circle"></i> If you are other than Pakistan national, Please enter Customer ID provided by ITU Branch.</p>
         </header>
         <input class="next" type="submit" value="Next" name="next">
        </form>
    </div>
   
</body>
</html>