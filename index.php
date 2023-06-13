<?php
require 'config/function.php';
// ambil 2 data lotto & DESC dari database
$dataLotto = getTwoDataLottoDesc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Canada Lottery</title>
</head>


<!--  LINK BOOTSTRAPP/JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- favicon -->
<link rel="shortcut icon" href="http://canadalottery.net/img/fav.png" type="image/x-icon">
<!-- bootstrap -->
<link rel="stylesheet" href="http://canadalottery.net/guest/bootstrap.min.css">
<!-- animate css -->
<link rel="stylesheet" href="http://canadalottery.net/guest/animate.css">
<link rel="stylesheet" href="http://canadalottery.net/guest/animate.min.css">
<!-- load all Font Awesome styles -->
<link rel="stylesheet" href="http://canadalottery.net/guest/all.min.css">
<!-- owl carousel css -->
<link rel="stylesheet" href="http://canadalottery.net/guest/owl.carousel.min.css">
<!-- main css -->
<link rel="stylesheet" href="http://canadalottery.net/guest/style.css">
<!-- LINK JS -->
<script src="http://canadalottery.net/guestt/jquery.js"></script>
<!-- popper -->
<script src="http://canadalottery.net/guestt/popper.min.js"></script>
<!-- bootstrap -->
<script src="http://canadalottery.net/guestt/bootstrap.min.js"></script>
<!-- plugin js-->
<script src="http://canadalottery.net/guestt/plugin.js"></script>
<script src="http://canadalottery.net/guestt/countdown.min.js"></script>
<!-- MpusemoverParallax JS-->
<script src="http://canadalottery.net/guestt/TweenMax.js"></script>
<script src="http://canadalottery.net/guestt/mousemoveparallax.js"></script>
<!-- main -->
<script src="http://canadalottery.net/guestt/main.js"></script>
<!-- Pagination.js -->
<!-- owl carousel js -->
<script src="http://canadalottery.net/guestt/owl.carousel.min.js"></script>
<!-- main js -->
<script src="http://canadalottery.net/guestt/main.js"></script>
<!-- lottery js initialize -->
<script src="http://canadalottery.net/guestt/lotteries-initialization.js"></script>


<body onload="startTime()" style=" background-color: #18687A;">

    <div class="preloader">
        <div class="loader ">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light p-3 ">
        <div class="container">
            <div class=" logo row">
                <div class="col-md-12 col-lg-5 offset-lg-1 text-center">
                    <img src="img/canada.png" alt="Canada Flag" style="max-width: 33%; height: auto;">
                </div>
            </div>
        </div>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link active text-light" href="resulteditnew.php"> Result</a>
                <a class="nav-link active text-light" href="contactedit.php ">Contact</a>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6">
                <div class="banner-content">
                    <h1 style="color: white; " class="title">LIVE
                        DRAW<span class="special">PLAY TO WIN</span>
                    </h1>
                    <h3 style="color: white;">
                        <?= $dataLotto[0]['tanggalupdate'] ?>
                    </h3>
                    <div class="result-number-palate" style="margin: 0px 0px rtfgvb20px 0px;" id="result_number">
                        <button class="single-selected-header" style="color: gold; background-color: orange; border-radius: 50%;">
                            <?= $dataLotto[0]['angka1'] ?>

                        </button>
                        <button class="single-selected-header" style="color: gold; background-color: orange; border-radius: 50%;">
                            <?= $dataLotto[0]['angka2'] ?>
                        </button>



                        <button class="single-selected-header" style="color: gold; background-color: orange; border-radius: 50%;">
                            <?= $dataLotto[0]['angka3'] ?>

                        </button>
                        <button class="single-selected-header" style="color: gold; background-color: orange; border-radius: 50%;">
                            <?= $dataLotto[0]['angka4'] ?>
                        </button>
                        <button class="single-selected-header" style="color:  gold; background-color: orange; border-radius: 50%;">

                            <?= $dataLotto[0]['angka5'] ?>
                        </button>
                    </div>

                    <div style="margin-top: 40px;" class="all-btns">
                        <a href="resulteditnew.php" class="btn-pok">View More Result <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-9 d-xl-flex d-lg-flex d-block align-items-end">
                <div class="part-img animated">

                    <div class="logo">
                        <img class="" src="img/ay.png" alt="">
                    </div>
                </div>
            </div>
            <div class="part-img animated">
                <div style="background-color:white  ;border-radius: 100px;">
                    <div class="picking-number-header">
                        <div class="container">
                            <div class="logo">
                                <h1 style="color: black;" id="headline">LET'S PLAY
                                    <span style="color: black;"> YOU WILL DEFINITELY WIN</span>
                                    <h3 style="color: black;" id="txt"></h3>


                                </h1>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
    </div>
    </div>

    <!-- ini untuk waktu -->
    <div class="lotteries">

        <div class="part-picking-number">
            <div class="lotteries-selection-menu">
            </div>
            <div class="animation-body animated">
                <div style="background-color: #18687A;" class="picking-number-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-info" role="tabpanel" aria-labelledby="pills-winners-tab">
                            <div class="lottery-winners">
                                <div class="row" id="result-list-only">
                                    <div class="row" id="result-list-only">

                                        <div class="col-xl-6 col-lg-6">
                                            <div style=" border: 5px solid #fff;background-color: #fff;" class="single-winner">
                                                <div class="part-text">
                                                    <p style="color: black;">DRAW NO:
                                                        <?= $dataLotto[0]['drawno'] ?>
                                                    </p>
                                                    <ul>
                                                        <li style="color: black;" class="plaing-stats">
                                                            <span style="color: black;" class="ps-title">Date
                                                                :</span>
                                                            <?= $dataLotto[0]['tanggalupdate'] ?>
                                                        </li>
                                                    </ul>
                                                    <div style="color: black;" class="winning-number ">
                                                        <span class="single-number selected">
                                                            <p style="color:gold;margin-top: 7 px;">

                                                                <?= $dataLotto[0]['angka1'] ?>
                                                            </p>
                                                        </span>

                                                        <span class="single-number selected">
                                                            <p style="color:gold;margin-top: 7 px;">

                                                                <?= $dataLotto[0]['angka2'] ?>

                                                            </p>
                                                        </span>
                                                        <span class="single-number selected">
                                                            <p style="color:gold;margin-top: 7 px;">
                                                                <?= $dataLotto[0]['angka3'] ?>
                                                            </p>
                                                        </span>

                                                        <span class="single-number selected">
                                                            <p style="color:gold;margin-top: 7 px;">
                                                                <?= $dataLotto[0]['angka4'] ?>
                                                            </p>
                                                        </span>

                                                        <span class="single-number selected">
                                                            <p style="color:gold;margin-top: 7 px;">
                                                                <?= $dataLotto[0]['angka5'] ?>
                                                            </p>
                                                        </span>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div style=" border: 5px solid #fff;background-color: #fff;" class="single-winner">
                                                <div class="part-text">
                                                    <p style="color: black;">DRAW NO:

                                                        <?= $dataLotto[1]['drawno'] ?>


                                                    </p>
                                                    <ul>
                                                        <li style="color: black;" class="plaing-stats">
                                                            <span style="color: black;" class="ps-title">Date
                                                                :</span>
                                                            <?= $dataLotto[1]['tanggalupdate'] ?>

                                                        </li>
                                                    </ul>

                                                    <div class="winning-number">
                                                        <span class="single-number selected">
                                                            <p style="color:gold;text-align: center;">
                                                                <?= $dataLotto[1]['angka1'] ?>
                                                            </p>
                                                        </span>
                                                        <span class="single-number selected">
                                                            <p style="color:gold;text-align: center;">
                                                                <?= $dataLotto[1]['angka2'] ?>

                                                            </p>
                                                        </span>

                                                        <span class="single-number selected">
                                                            <p style="color:gold;text-align: center;font: bold;">
                                                                <?= $dataLotto[1]['angka3'] ?>
                                                            </p>
                                                        </span>
                                                        <span class="single-number selected">
                                                            <p style="color:gold;text-align: center;">
                                                                <?= $dataLotto[1]['angka4'] ?>
                                                            </p>
                                                        </span>
                                                        <span class="single-number selected">
                                                            <p style="color:gold;text-align: center;">
                                                                <?= $dataLotto[1]['angka5'] ?>
                                                            </p>
                                                        </span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="part-btn ">
                                    <a href=" resulteditnew.php" class="btn-pok ">See Result<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- lottery end -->

    <!-- footer begin -->
    <div class="footer">
        <div style=" background-color: #18687A ;  border: 5px solid #18687A;" class=" footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p style="color:white" class="copyright-text">copyright © 2022. all right reserved by
                        Canada Lottery
                    </p>
                    <div class="footer-menu">
                        <ul>
                            <li>
                                <a style="color:white" href="index.php" class="single-menu">home</a>
                            </li>
                            <li>
                                <a style="color:white" href="resulteditnew.php" class="single-menu">Results</a>
                            </li>
                            <li>
                                <a style="color:white" href="contactedit.php" class="single-menu">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->

    <!-- back to button begin -->
</body>
<style>
    @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .animated-logo {
        max-width: 33%;
        height: auto;
        animation: rotate 4s linear infinite;
    }

    #clock {
        font-size: 24px;
        font-weight: bold;
    }


    #clock {
        font-size: 48px;
        color: #ffffff;
        text-align: center;
    }

    @keyframes logoAnimation {
        0% {
            opacity: 0;
            transform: scale(0.5);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    .logo {
        animation: logoAnimation 1s ease-in-out infinite alternate;
    }

    .title {
        color: white;
    }

    .part-img {
        position: relative;
    }

    .part-img .power-ball {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation-name: spin;
        animation-duration: 2s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    @keyframes spin {
        0% {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        100% {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }

    /******pagination.js******/

    .simple-pagination ul {
        margin: 50px 0 20px;
        padding: 0;
        list-style: none;
        text-align: center;
    }

    .simple-pagination li {
        display: inline-block;
        margin-right: 5px;
    }

    .simple-pagination li a,
    .simple-pagination li span {
        color: #135766;
        padding: 5px 10px;
        text-decoration: none;
        border: 1px solid #EEE;
        background-color: #FFF;
        font-size: 15px;
        padding: 10px 15px 10px 15px;
        border-radius: 10px;
    }

    .simple-pagination .current {
        color: #FFF;
        background-color: #135766;
        border-color: #135766;
        font-size: 15px;
        padding: 10px 15px 10px 15px;
        border-radius: 10px;
    }

    .simple-pagination .prev.current,
    .simple-pagination .next.current {
        background: #135766;
    }


    /******pagination.js******/

    .container {
        color: #333;
        margin: 0 auto;
        text-align: center;
    }

    #countdown #tiles>span {
        width: 70px;
        max-width: 70px;
        font: bold 70px "Barlow Condensed", sans-serif;
        text-align: center;
        display: inline-block;
        position: relative;
        color: #ffff;
    }

    .headline {
        font-weight: normal;
        letter-spacing: .125rem;
        text-transform: uppercase;
    }

    .spans {
        background: -webkit-linear-gradient(219.47deg, #F08B6B 15.1%, #C5B310 86.62%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .container-table th h1 {
        font-weight: bold;
        font-size: 1em;
        text-align: left;

    }

    .container-table td {
        font-weight: normal;
        font-size: 1.2em;
        -webkit-box-shadow: 0 2px 2px -2px #0E1119;
        -moz-box-shadow: 0 2px 2px -2px #0E1119;
        box-shadow: 0 2px 2px -2px #0E1119;
    }

    .container-table {
        text-align: left;
        overflow: hidden;
        width: 100%;
        margin: 0 auto;
        display: table;
        padding: 0 0 8em 0;
    }

    .container-table td,
    .container-table th {
        padding-bottom: 2%;
        padding-top: 2%;
        padding-left: 2%;
    }

    /* Background-color of the odd rows */

    .container-table tr:nth-child(odd) {
        background-color: black;
    }

    /* Background-color of the even rows */

    .container-table tr:nth-child(even) {
        background-color: black;
    }

    .container-table th {
        background-color: black;
    }

    .container-table td:first-child {
        font-weight: bold;
        background: linear-gradient(223.14deg, #D3471A -17.3%, #988B17 101.56%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        width: 300px;
    }

    .container-table td:last-child {
        font-weight: bold;
        background: linear-gradient(223.14deg, #D3471A -17.3%, #988B17 101.56%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .container-table tbody tr:hover {
        background-color: #fff;
        -webkit-box-shadow: 0 6px 6px -6px #0E1119;
        -moz-box-shadow: 0 6px 6px -6px #0E1119;
        box-shadow: 0 6px 6px -6px #0E1119;
        cursor: pointer;
    }

    @media (max-width: 800px) {

        .container-table td:nth-child(4),
        .container-table th:nth-child(4) {
            display: none;
        }
    }
</style>

<!--  SCRIPT LOGIC TIME -->
<script>
    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        // Format waktu dengan menambahkan nol di depan jika angka < 10
        minutes = (minutes < 10 ? "0" : "") + minutes;
        seconds = (seconds < 10 ? "0" : "") + seconds;

        var timeString = hours + ":" + minutes + ":" + seconds;

        document.getElementById("txt").innerHTML = timeString;
    }

    // Memanggil fungsi updateClock setiap detik
    setInterval(updateClock, 1000);
</script>
<!-- LINK ARROW -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</html>