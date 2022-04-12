<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    {{-- navbar --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Hello, world!</title>

</head>
<style>
    .jumbotron {
        height: 100vh;
        /* background-color: skyblue; */
        margin-bottom: 0px;
        background-image: url("img/oi.jpg");
        background-size: cover;
    }

    .navbar {
        background: skyblue;
        /* opacity: 0.3; */


    }

    .bgcolor.scrolled {
        background-color: rgb(138, 138, 180);
        /* opacity: 0.3; */

    }

</style>


<body>
    <nav class="navbar  navbar-expand-lg navbar navbar-expand-sm sticky-top navbar-light bgcolor">
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">

                <li class="nav-item active "><a class="nav-link " href="#"><i class="bi bi-arrow-through-heart-fill"></i></a></li>

            </ul>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active "><a class="nav-link " href="#">Home</a></li>
                <li class="nav-item active"><a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item active"><a class="nav-link" href="#">Galery</a>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">

        <div class="container ">
            {{-- <img src="{{ asset('img/oi.jpg') }}" class="img-fluid" alt="Responsive image"> --}}
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });

    </script>

</body>
</html>
