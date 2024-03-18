<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Contact Us</title>
    <style>
        body{
            margin: 0;
	padding: 0;
            font-family: 'Roboto', sans-serif; 
            background-color: beige;
        }
        *{
            list-style: none;
            text-decoration: none;
        }
        div{
            margin-top: 100px;
        }
        label.link1{
            background-color: whitesmoke;
            width: 50px;
            border:  solid rgb(209, 28, 58);
            padding: 20px;
            margin: 20px;
            margin-left: 2px;
            font-size: 18px;
            border-radius: 10px;
            text-align: center;
        
        }
        label.link2{
            background-color: whitesmoke;
            width: 50px;
            border: solid rgb(209, 28, 58);
            padding: 20px;
            margin: 20px;
           
            margin-left: 2px;
            font-size: 18px;
            border-radius: 10px;
            text-align: center;
        }
        label.link3{
            background-color: whitesmoke;
            width: 50px;
            border:  solid rgb(209, 28, 58);
            padding: 20px;
            margin: 20px;
       
            margin-left: 2px;
            font-size: 18px;
            border-radius: 10px;
            text-align: center;
        }
        label.link4{
            background-color: whitesmoke;
            width: 50px;
            border:  solid rgb(209, 28, 58);
            padding: 20px;
            margin: 20px;
     
            margin-left: 2px;
            font-size: 18px;
            border-radius: 10px;
            text-align: center;
        }
        label.link5{
            background-color: whitesmoke;
            width: 50px;
            border:  solid rgb(209, 28, 58);
            padding: 20px;
            margin: 20px;
            margin-left: 2px;
            font-size: 18px;
            border-radius: 10px;
            text-align: center;
        }
        a{
           color: rgb(209, 28, 58);
        }
        i{
             color: rgb(209, 28, 58);
        }
        .scrolling {
	position: relative;
	width: 100%;
	height: 50px;
	overflow: hidden;
	margin-top: 20px;
}
.scrolling h1 {
    
	position: absolute;
	width: 100%;
	margin: 0;
	padding: 0;
	font-size: 2em;
	text-align: center;
	line-height: 50px;
	color: whitesmoke;
	transform: translateX(100%);
	animation: scrolling 15s linear infinite;
}
header{
    height: 40px;
    margin-top: 10px;
        margin-left: 0px;
        background-color:rgb(209, 28, 58);
        text-align: center;
        font-size: 10px;
}
@keyframes scrolling {
	0% {
		transform: translateX(100%);
	}
	100% {
		transform: translateX(-100%);
	}
}
label.follow{
            color:rgb(90, 86, 86);
            margin-left: 10px;
            font-size: 20px;
        }
        a.icon{
            
            margin-top: 30px;
            color: rgb(209, 28, 58);
            font-family: Arial, Helvetica, sans-serif;
        }
        i{
            
            margin-top: 30px;
           font-size: 25px;
           color:rgb(209, 28, 58);
        }
    </style>
</head>
<body>
    <header>
    <div class="scrolling"><h1>Depending on your needs, you can contact ITU in a variety of ways.</h1></div>
</header>
    <div >
        <label class="link1" for=""><a href="#"><i class="fas fa-envelope"></i>Email:Customer.Complaints@itu.edu.pk</a></label>
        <label class="link2" for=""><a href="#"><i class="fas fa-message"></i>SMS:4905</a></label>
            <label class="link3" for=""> <a href="#"><i class="fas fa-globe"></i>Website:www.ITU.com</a></label>
                <label class="link4" for=""><a href="#"><i class="fas fa-phone"></i>ITU PhoneBanking:+92 3324553008</a></label>
    </div>
    <div>
        <label for="" class="follow">Follow Us.</label>
        <br>
        <label class="link1" for=""><i  class="fa-brands fa-facebook"></i> <a class="icon" href="https://www.facebook.com/">facebook</a></label>
        <label class="link2" for=""><i  class="fa-brands fa-instagram"></i> <a class="icon" href="https://www.instagram.com/">Instagram</a></label>
            <label class="link3" for=""><i  class="fa-brands fa-linkedin"></i> <a class="icon" href="https://www.linkedin.com/">Linkedin</a> </label>
                <label class="link4" for=""><i  class="fa-brands fa-twitter"></i> <a class="icon" href="https://twitter.com/">twitter</a></label>
                    <label class="link5" for=""><i  class="fa-brands fa-youtube"></i> <a class="icon" href="https://www.youtube.com/">Youtube</a></label>
       
    </div>

</body>
</html>