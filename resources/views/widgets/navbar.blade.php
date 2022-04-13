<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">

    <title>Hello, world!</title>
</head>
<style>
    .jumbotron {
        height: 100%;
        /* background-image: url('img/deo.jpg'); */
        background-size: cover;
        /* filter: brightness(50%); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url('img/deo.jpg');
        /* background-repeat: no-repeat; */
    }
    .jumbotron2 {
        height: 80vh;
        background-color: #2A2E34;
    }
    .special {
        display: grid;
    }
    .lingkeran {
        text-align: center;
        height: 50px;
        width: 50px;
        background-color: whitesmoke;
        border-radius: 100%;
    }
    .lingkeran-gendut {
        text-align: center;
        height: 160px;
        width: 160px;
        background-color: whitesmoke;
        border-radius: 100%;
    }
    /* for tablets and desktops*/
    @media screen and (min-width: 600px) {
        .special {
            grid-template-columns: 1fr 2fr;
            grid-template-rows: 50px 50px;
        }
        .logo {
            grid-area: 1/1/3/2;
            margin-left: 30px;
        }
    }
    .arrow {
        position: absolute;
        top: -10%;
        left: 60%;
        transform: translate(-50%, -50%);
    }
    .arrow span {
        display: block;
        width: 20px;
        height: 20px;
        border-bottom: 5px solid #f7f7f6;
        border-right: 5px solid #f7f7f6;
        transform: rotate(45deg);
        margin: -10px;
        animation: animate 2s infinite;
    }
    .arrow span:nth-child(2) {
        animation-delay: -0.2s;
    }
    .arrow span:nth-child(3) {
        animation-delay: -0.4s;
    }
    @keyframes animate {
        0% {
            opacity: 0;
            transform: rotate(45deg) translate(-20px, -20px);
        }
        50% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            transform: rotate(45deg) translate(20px, 20px);
        }
    }


    .jumbotron3 {
        /* height: 100vh; */
        /* background-image: url('img/deo.jpg'); */
        /* background-size: cover; */
        /* filter: brightness(50%); */
        /* background-image : linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url('img/deo.jpg'); */
        /* background-repeat: no-repeat; */
        /* margin-top: -3%; */
        background-color: rgba(120, 120, 120, 120);
        /* margin-top: 0; */
        z-index: -1;
    }

    .jumbotron4 {
        /* height: 100%; */
        background-color: rgba(179, 179, 179, 179);
    }

    /* .jumbotron3 h1{
        margin-top: 50px;
    } */

    .stuck .sticky-top {
        background-color: transparent !important;
        padding-top: 3px !important;
        padding-bottom: 3px !important;
    }

    .tombol-putih {

        background-color: transparent;
        border: 1px solid;
        background-color: transparent;
        color: #f7f7f6;
    }

    .tombol-putih:hover {
        background-color: #f7f7f6;
        color: #020104;
    }

    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 10px;
        padding: 10px;
        width: 400px;
        margin-left: 30%;
        margin-top: 5%;
    }

    .card img {
        border-radius: 100%;
        height: 160px;
        width: 160px;
    }

</style>
<body>
    {{-- @include('widgets.navbar'); --}}
    <nav style="transition: all 0.7s ease-in-out;" class="navbar navbar-expand-md fixed-top navbar-dark">
        <a class="navbar-brand" style="font-weight: 600" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto" style="margin-right:40px;">
                <li class="nav-item">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GALERY</a>
                </li>
            </ul>

        </div>
    </nav>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 56) {
                    $(".navbar").addClass("bg-dark");
                } else {
                    $(".navbar").removeClass("bg-dark");
                }
            });
            // If Mobile, add background color when toggler is clicked
            $(".navbar-toggler").click(function() {
                if (!$(".navbar-collapse").hasClass("show")) {
                    $(".navbar").addClass("bg-dark");
                } else {
                    if ($(window).scrollTop() < 25) {
                        $(".navbar").removeClass("bg-dark");
                    } else {}
                }
            });
            // ############

            // document ready
        });

    </script>
</body>

</html>
