<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<style>
    .jumbotron {
        height: 100vh;
        /* background-image: url('img/deo.jpg'); */
        background-size: cover;
        /* filter: brightness(50%); */
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url('img/deo.jpg');

    }

    .stuck .sticky-top {
        background-color: transparent !important;
        padding-top: 3px !important;
        padding-bottom: 3px !important;
    }

    .tombol-putih {

        background-color: transparent;
        border : 1px solid;
        background-color: transparent;
        color: #f7f7f6;
    }

    .tombol-putih:hover {
        background-color: #f7f7f6;
        color: #020104;
    }

</style>
<body>
    <nav style="transition: all 0.7s ease-in-out;" class="navbar navbar-expand-md fixed-top navbar-dark">
        <a class="navbar-brand" style="font-weight: 600" href="#">DEO'S BEAUTY</a>
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




    <div class="jumbotron" style=" border-radius : 0px;">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="text-center">
                    <h1 class="display-4 text-light" style="margin-top:8%;font-weight: 600; font-family:Verdana, Geneva, Tahoma, sans-serif">Deo's Beauty</h1>
                    <div class="lead text-light" style="font-weight: 400">When you design in STUDIO, every stroke gets code generated ready to go live. CMS, IDE and Analytics are integrated for seamless customizations. Cross-team collaboration is built along every step.</div>
                </div>
                <div class="col-3 mx-auto">
                    <div class="btn tombol-putih mt-3 ">kam to see  &#128540;</div>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 100vh" class="container">

    </div>
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
