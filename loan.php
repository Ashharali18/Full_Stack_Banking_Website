<?php
session_start();
$us = $_SESSION['user_name'];


$conn = mysqli_connect("localhost", "root", "", "project") or die("Connection failed");
if (isset($_REQUEST['btn'])) {

    $query = mysqli_query($conn, "select * from accounts where Username='$us'  ");
    $rowcount = mysqli_num_rows($query);
    if ($rowcount == true) {

        $amount = (isset($_POST['f3']) ? $_POST['f7'] : '');
        $purpose = (isset($_POST['f4']) ? $_POST['f6'] : '');
        $v_code = bin2hex(random_bytes(4));

        $_SESSION['vcode'] = $v_code;

        $result = mysqli_query($conn, "INSERT INTO `transaction`(R_Acc_num, T_purpose, D_Category,L_purpose,Amount, Username, Bank_name,verification_code) VALUES ('0','0','0','$purpose','$amount', '$us','0','0')");
        $result1 = mysqli_query($conn, "UPDATE Accounts SET Amount=Amount+$amount WHERE Username='$us'");
        if ($result == true && $result1 == true) {
            echo "<script>alert('Loan Availed successfully!');window.location='/Project/logged_in.php/'</script>";

        }
    } else {
        echo "<script>alert('Invalid Information..!!!');window.location='/Project/loan.php/'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan</title>
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
        background: url("../Loan.JPG"), rgb(255, 232, 99);
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
        width: 300px;
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

    .fa-at,
    .fa-mail-bulk {
        transform: rotate(10deg);
    }

    input,
    textarea {
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

        .left-part,
        form {
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

    form {
        margin-top: 50px;
        margin-left: 500px;


    }

    .back_button button {
        margin-left: 510px;
        width: 1000px;
        height: 60px;
        font-size: Large;
        background-color: rgb(243, 207, 4);
        border-radius: 5px;
    }

    .c2 p {
        color: white;
    }

    .c3 p {
        color: white;
    }
</style>

<body>
    <div class="image">
        <div class="mainbox">
            <div class="c1">
                <img src="../logo2.JPG" alt="">


                <div class="container1">
                    <form method="post" class="decor">
                        <div class="form-left-decoration"></div>
                        <div class="form-right-decoration"></div>
                        <div class="circle"></div>
                        <div class="form-inner">
                            <h1>Loan Request</h1>
                            <input type="text" placeholder="First name" name="f1">
                            <input type="text" placeholder="Last name" name="f2">
                            <input type="text" placeholder="CNIC" name="f3">
                            <input type="text" placeholder="Address" name="f4">
                            <input type="text" placeholder="How long you are living on this address?" name="f5">
                            <input type="text" placeholder="For what purpose you want to get loan?" name="f6">
                            <input type="text" placeholder="Amount" name="f7">
                            <button type="submit" name="btn">Avail loan</button>
                        </div>
                    </form>

                </div>
                <div class="back_button">
                    <button>Go back to home page</button>
                </div>
            </div>

</body>

</html>