<?php
session_start();
$us = $_SESSION['user_name'];
$conn = mysqli_connect("localhost", "root", "", "Project") or die("Connection failed");

if (isset($_REQUEST['btn'])) {
    $otp = (isset($_POST['otp']) ? $_POST['otp'] : '');
    $res = mysqli_query($conn, "select * from transaction where verification_code='$otp'");
    if (mysqli_num_rows($res) == 1) {
        echo "<script>alert('You have successfully send money');window.location='../logged_in.php/'</script>";

    } else {
        echo "<script>alert('Invalid otp..!!!');window.location='../funds_transfer_confirmation.php/'</script>";

    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Transfer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ms+Madi&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .container1,
    .container2 {
        font-family: 'Verdana', sans-serif;
        display: inline;
        display: inline-block;
    }

    * {
        margin: 0;
        padding: 0;
    }

    .image {
        width: 1900px;
        height: 924px;
        background: url("../Funds_transfer_Background2.JPG"), rgb(255, 232, 99);
        background-blend-mode: multiply;
        background-size: cover;
        z-index: 1;
    }

    .mainbox {
        z-index: 2;
    }

    .c1 {
        width: 1900px;
        height: 110px;
        background-color: white;
        display: ;

    }

    .c1 img {
        margin-left: 800px;
        margin-top: 24px;
        width: 280px;
        height: 70px;
    }

    .c2 p {
        margin-left: 220PX;
        margin-top: 280PX;
        font-size: 60px;
        font-weight: 500;

    }

    .c3 p {
        margin-left: 220px;
        font-size: 25px;
    }


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
        width: 500px;
        height: 200px;
        padding: 25px;
        margin: 25px;
        box-shadow: 0 2px 5px #f5f5f5;
        background: #f5f5f5;
        margin-top: 130px;


    }


    input {
        width: 500px;
        height: 30px;
    }

    .container2 {
        display: inline-block;
        margin-top: 110px;
        margin-right: 200px;
        font-size: large;
        float: right;



    }

    .back_button button {
        margin-left: 1125px;
        width: 550px;
        height: 60px;
        font-size: Large;
        background-color: rgb(243, 207, 4);
        border-radius: 5px;
    }

    .f1,
    .f2,
    .f3,
    .f4,
    .f5 {
        margin-top: 15px;
    }

    .container2 button {
        width: 500px;
        height: 30px;
        background-color: rgb(209, 28, 58);
        color: white;
        border-radius: 8px;
        font-size: large;
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
                <p><b>Move money easily <br> & conveniently</b> </p>
            </div>
            <div class="c3">
                <p>Easy and secure way to send and recieve your <br> money in short time</p>
            </div>
        </div>
        <div class="container2">
            <form class="decor" method="post">
                <div class="form-left-decoration"></div>
                <div class="form-right-decoration"></div>
                <div class="circle"></div>
                <div class="form-inner">
                    <h1>Send Money</h1>

                    <br>
                    <input type="text" name="otp" placeholder="Enter OTP sent to your email">
                    <br>
                </div>
                <div class="f5"> <button type="submit" name="btn">Send money</button></div>

        </div>
        </form>

    </div>
    <div class="back_button">
        <button>Go back to home page</button>
    </div>
    </div>

</body>

</html>