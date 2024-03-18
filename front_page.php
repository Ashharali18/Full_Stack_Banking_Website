<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ms+Madi&family=Open+Sans:wght@300&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1899px;
            position: relative;
            margin-top: 50px;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 2s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }

        .c3b {
            animation: key1 .3s ease infinite alternate;
        }

        @keyframes key1 {
            0% {
                transform: translateY(0px);
            }

            100% {
                transform: translateY(-30px);
            }
        }

        body {
            margin: 0;
            padding: 0;
        }

        .c1 {
            width: 1899px;
            height: 3.5px;
            background-color: rgb(209, 28, 58);
        }

        .c2a,
        .c2b,
        .c2c,
        .c2d {
            display: inline-block;
        }

        * {
            font-family: 'Ms Madi', cursive;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Roboto', sans-serif;
        }

        .c2a {
            margin-top: 0;
            margin-left: 120px;
        }

        .c2b,
        .c2c,
        .c2d {
            border-style: solid;
            border-width: 2px;
            border-color: rgb(209, 28, 58);
            background-color: rgb(209, 28, 58);
            margin-top: 7px;
            border-radius: 8px;
            color: white;
            padding-left: 40px;
            padding-right: 40px;
            margin-left: 50px;
            font-size: small;
        }

        .c2b:hover,
        .c2c:hover,
        .c2d:hover {
            background-color: white;
            color: rgb(209, 28, 58);
        }


        hr {
            border: 1px solid rgb(156, 154, 154);
        }

        /* Dropdown Button */
        .dropbtn {
            background-color: white;
            color: rgb(97, 97, 97);
            padding: 16px;
            font-size: 22px;
            border-width: 2px;
            border-radius: 4px;
            border-color: white;
            font-weight: bold;
            margin-top: 0;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 30px;

        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: rgb(209, 28, 58);
            color: white;
        }

        .c3a {
            margin-left: 50px;
            margin-top: 40px;
            display: inline;
            width: 30%;
            height: auto;

        }

        .c3b {
            display: inline-block;
            border-style: solid;
            border-width: 2px;
            border-color: rgb(243, 207, 4);
            background-color: rgb(243, 207, 4);
            margin-top: 7px;
            border-radius: 8px;
            color: black;
            padding-left: 50px;
            padding-right: 50px;
            margin-left: 30px;
            font-size: larger;
            margin-top: 30px;

        }

        marquee {
            height: 40px;
            width: 1899px;
            background-color: rgb(217, 214, 214);
            color: rgb(209, 28, 58);
            margin-top: 20px;
            margin-left: 0px;
            font-size: larger;
            padding-top: 8px;
            font-weight: bolder;
        }

        .dot {
            margin-top: 20px;
        }

        .c5 p {
            text-align: center;
            font-size: 45px;
            color: rgb(101, 101, 101);
        }

        .c5 {

            background-color: white;
            margin-top: 0px;

        }

        .c5a,
        .c5b,
        .c5c {
            width: 200px;
            height: 280px;
            display: inline-block;
            margin-top: 10px;
            margin-left: 320px;
            text-align: center;
            font-size: large;
            border-radius: 5px;
            color: rgb(43, 43, 43);
        }

        .c5a:hover,
        .c5b:hover,
        .c5c:hover {
            box-shadow: 0px 0px 20px 10px rgb(192, 96, 112);

        }

        .c6 p {
            text-align: center;
            font-size: 45px;
            color: rgb(53, 53, 53);
        }

        .c6 {
            margin-top: 0px;
        }

        .c6a,
        .c6b,
        .c6c {
            width: 300px;
            height: 500px;
            display: inline-block;
            margin-top: 10px;
            margin-left: 230px;
            color: rgb(43, 43, 43);
            font-size: large;
            border-radius: 5px;
        }

        .c6a:hover,
        .c6b:hover,
        .c6c:hover {
            transform: scale(1.2);
        }

        .C6 {
            background-color: rgb(237, 237, 237);
            padding-bottom: 30px;
        }

        .C6 img {
            width: 400px;
            height: auto;
        }


        .c7 p {
            text-align: center;
            font-size: 45px;
            color: rgb(53, 53, 53);
        }

        .c7 {
            margin-top: 0px;
        }

        .c7a,
        .c7b,
        .c7c {
            width: 300px;
            height: 500px;
            display: inline-block;
            margin-top: 10px;
            margin-left: 130px;
            color: rgb(43, 43, 43);
            font-size: large;
            border-radius: 5px;
        }

        .c7a:hover,
        .c7b:hover,
        .c7c:hover {
            transform: scale(1.2);
        }

        .C7 {
            background-color: rgb(255, 255, 255);
            padding-bottom: 30px;
        }

        .C7 img {
            width: 400px;
            height: auto;
        }

        .c8 {
            width: 1899px;
            height: 200px;
            background-color: rgb(209, 28, 58);
            color: White;
            font-size: 27px;
            padding-left: 100px;
            padding-top: 60px;
        }

        .c8a {
            display: inline-block;
            border-style: solid;
            border-width: 2px;
            border-color: rgb(243, 207, 4);
            background-color: rgb(243, 207, 4);
            border-radius: 8px;
            color: black;
            padding-left: 20px;
            padding-right: 20px;
            font-size: 20px;
            margin-top: 7px;

        }

        .c9 {
            background-color: rgb(248, 248, 248);
        }

        .c9a {
            display: inline-block;
            padding-top: 30px;
            padding-left: 100px;
        }

        .c9a p {
            margin-top: 10px;
        }

        .c9b {
            display: inline-block;
            margin-left: 300px;
        }

        .fa {
            padding-left: 20px;
            padding-right: 40px;
            padding-top: 30px;
            padding-bottom: 30px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
        }

        /* Add a hover effect if you want */
        .fa:hover {
            opacity: 0.7;
        }

        /* Set a specific color for each brand */

        /* Facebook */
        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        /* Twitter */
        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-instagram {
            background: #ee559f;
            color: white;
        }

        .fa-linkedin {
            background: #d7d7d7;
            color: rgb(20, 0, 84);
        }
    </style>

</head>

<body>
    <header>
        <div class="c1">

        </div>
        <div class="c2">
            <div class="c2a">
                <p>(042)-111-222-333 | complaints@gmail.com</p>
            </div>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">
                <div class="c2b">
                    <p>Public information</p>
                </div>
            </a>
            <a href="#">
                <div class="c2c">
                    <p>Media</p>
                </div>
            </a>
            <a href="#">
                <div class="c2d">
                    <p>Career</p>
                </div>
            </a>


        </div>
        <hr>
        <div class="c3">
            <div class="c3a">
                <img src="../logo2.JPG" alt="">
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="dropdown">
                <div class="dropbtn">WHO WE ARE</div>
                <div class="dropdown-content">
                    <a href="#">About Us</a>
                    <a href="#">Mission</a>
                    <a href="#">History</a>
                    <a href="#">Leadership</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn">WHAT WE OFFER</div>
                <div class="dropdown-content">
                    <a href="#">Deposits</a>
                    <a href="#">Loans</a>
                    <a href="#">DFS Application</a>
                    <a href="#">Client Protection</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropbtn">WHERE WE WORK</div>
                <div class="dropdown-content">
                    <a href="#">Branches</a>
                    <a href="#">Head Office</a>
                </div>
            </div>
            <a href="../Customer.php/">
                <div class="c3b">
                    <p>Apply Online!</p>
                </div>
            </a>


        </div>
    </header>
    <section>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../slide1.JPG" style="width:100%">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../slide3.JPG" style="width:100%">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../slide4.JPG" style="width:100%">

            </div>

            <br>
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>


            <marquee direction="right" behavior="alternate">
                Dear customer! ITU Bank will observe public dealings from 9:00 am to 5:00 pm from monday till friday
            </marquee>


            <div class="c5">
                <p><b>Financial Products & services</b> </p>

            </div>
            <a href="#">
                <div class="c5a">
                    <img src="../icon7.jpg" alt="">
                    <h3>Deposit</h3>
                    <p>ITU bank offers convenient saving produtcs with competitive interest rates</p>
                </div>
            </a>

            <a href="#">
                <div class="c5b">
                    <img src="../icon8.JPG" alt="">
                    <h3>Loans</h3>
                    <p>ITU bank offers a variety of loan products specifically designed for individuals.</p>
                </div>
            </a>


            <a href="#">
                <div class="c5c">
                    <img src="../icon9.PNG" alt="">
                    <h3>ITU</h3>
                    <p>Digital wallet in urdu to provide free payment solutions by ITU bank
                        limited
                    </p>
                </div>
            </a>
            <div class="C6">
                <div class="c6">
                    <p><b>News & Press</b> </p>

                </div>

                <a href="#">
                    <div class="c6a">
                        <img src="../News1.JPG" alt="">
                        <p style="color: rgb(209, 28, 58);">ITU joins hands with karandaz to enable Financial inclusion
                            of Pakistan</p>
                        <p>September 9,2022</p>
                        <p>ITU bank offers convenient saving produtcs with competitive interest rates</p>
                    </div>
                </a>

                <a href="#">
                    <div class="c6b">
                        <img src="../News2.JPG" alt="">
                        <p style="color: rgb(209, 28, 58);">CEO's interview with GULF and Pakistan economist</p>
                        <p>March 18, 2022</p>
                        <p>CEO of ITU Bank ltd. recenty interviewd by GULF and Pakistan economist and discusion about
                            the progress was held</p>
                    </div>
                </a>

                <a href="#">
                    <div class="c6c">
                        <img src="../News3.JPG" alt="">
                        <p style="color: rgb(209, 28, 58);">ITU bank joins hands with Vital green</p>
                        <p>March 20, 2022</p>
                        <p>As a part of its mission, ITU bank joined hands with vital green to provide freelancing to
                            farmers and to provide them innovative and impactful financial solutions</p>
                    </div>
                </a>
            </div>
            <div class="C7">
                <div class="c7">
                    <p><b>Success Stories</b> </p>

                </div>

                <a href="#">
                    <div class="c7a">
                        <img src="../ss1.JPG" alt="">
                        <p style="color: rgb(209, 28, 58);">Irshad Bibi</p>
                        <p>Living your dreams in a real world. The story of sultana bibi</p>
                    </div>
                </a>

                <a href="#">
                    <div class="c7b">
                        <img src="../ss2.JPG" alt="">
                        <p style="color: rgb(209, 28, 58);">Sultana Asim</p>
                        <p>How a woman in Sargodha beats odds to open her shop</p>
                    </div>
                </a>

                <a href="#">
                    <div class="c7c">
                        <img src="../ss3.JPG" alt="">
                        <p style="color: rgb(209, 28, 58);">Rizwan Shah</p>
                        <p>Rizwan Shah owns a mobile accesory shop in lahore</p>
                    </div>
                </a>
                <a href="#">
                    <div class="c7c">
                        <img src="../ss4.JPG" alt="">
                        <p style="color: rgb(209, 28, 58);">Javed Iqbal</p>
                        <p>Javed Iqbal owns a Bicycle repairing shop</p>
                    </div>
                </a>
            </div>

            <div class="c8">
                <span><b>Request a call back</b>
                </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>(042)-111-222-333</span>
                <br>
                <span>You can requuest a call back. One of our operators will call you at any convenient time and answer
                    your questions</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                    <a href="#">
                        <div class="c8a">
                            <p>Call back</p>
                        </div>
                    </a>

                </span>

            </div>


    </section>
    <footer>
        <div class="c9">
            <div class="c9a">
                <p>ITU Bank Limited</p>
                <p>Head Office</p>
                <p>36-B, Khayaban-e-Iqbal, XX Block DHA Phase-III, Lahore, Pakistan</p>
                <p>Customer support center</p>
                <p>Helpline: (042)-111-222-333</p>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>
            <div class="c9b">
                <p>ITU Bank Global Network</p>
                <img src="../Map.JPG" alt="">
            </div>
        </div>
    </footer>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
</body>

</html>