<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compact Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
    {{-- aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,200;1,300&display=swap"
        rel="stylesheet">
    <title>Deo's studio</title>
    <link rel="icon" href="{{ asset('img/ima.png') }}">

    <style>
        .jumbotron {
            height: 100vh;
            /* background-image: url('img/deo.jpg'); */
            background-size: cover;
            /* filter: brightness(50%); */
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url('img/deo.jpg');
            /* background-repeat: no-repeat; */
        }

.jumbotron5{
    /* height: 50vh; */
    /* background-color: #585555; */
    color: #ffffff;
}

        .gallery-block {
            padding-bottom: 60px;
            padding-top: 60px;
        }

        .gallery-block .heading {
            margin-bottom: 50px;
            text-align: center;
        }

        .gallery-block .heading h2 {
            font-weight: bold;
            font-size: 1.4rem;
            text-transform: uppercase;
        }

        .gallery-block.compact-gallery .item {
            overflow: hidden;
            margin-bottom: 0;
            background: black;
            opacity: 1;
        }

        .gallery-block.compact-gallery .item .image {
            transition: 0.8s ease;
        }

        .gallery-block.compact-gallery .item .info {
            position: relative;
            display: inline-block;
        }

        .gallery-block.compact-gallery .item .description {
            display: grid;
            position: absolute;
            bottom: 0;
            left: 0;
            color: #fff;
            padding: 10px;
            font-size: 17px;
            line-height: 18px;
            width: 100%;
            padding-top: 15px;
            padding-bottom: 15px;
            opacity: 1;
            color: #fff;
            transition: 0.8s ease;
            text-align: center;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.39));
        }

        .gallery-block.compact-gallery .item .description .description-heading {
            font-size: 1em;
            font-weight: bold;
        }

        .gallery-block.compact-gallery .item .description .description-body {
            font-size: 0.8em;
            margin-top: 10px;
            font-weight: 300;
        }

        @media (min-width: 576px) {

            .gallery-block.compact-gallery .item .description {
                opacity: 0;
            }

            .gallery-block.compact-gallery .item a:hover .description {
                opacity: 1;
            }

            .gallery-block .zoom-on-hover:hover .image {
                transform: scale(1.3);
                opacity: 0.7;
            }
        }


.text {
 opacity: 0;
 /* position: absolute; */
 z-index: 7;
 padding-top: 5%;


 /* font-size: 48px;
 font-weight: 700; */
 -webkit-animation: on .6s ease-in-out 3.7s forwards;
 -moz-animation: on .6s ease-in-out 3.7s forwards;
 -o-animation: on .6s ease-in-out 3.7s forwards;
 animation: on .6s ease-in-out 3.7s forwards;
}
.text p {
 white-space: nowrap;
 overflow: hidden;
 width: 100%;
 -webkit-animation: type .3s steps(60, end) 3.7s;
 -moz-animation: type .3s steps(60, end) 3.7s;
 -o-animation: type .3s steps(60, end) 3.7s;
 animation: type .3s steps(60, end) 3.7s;
}
.text p:nth-child(2) {
 -webkit-animation: type2 .5s steps(60, end) 3.7s;
 -moz-animation: type2 .5s steps(60, end) 3.7s;
 -o-animation: type2 .5s steps(60, end) 3.7s;
 animation: type2 .5s steps(60, end) 3.7s;
}
.text button {
 border: 0;
 opacity: 0;
 /* background: #191919; */

 border: 1px solid #191919;
 letter-spacing: 2px;
 padding: 0.5rem 2.5rem;
 font-size: 12px;
 font-weight: 600;
 text-transform: uppercase;
 cursor: pointer;
 -webkit-transition: color 0.5s, background-color 0.5s;
 -moz-transition: color 0.5s, background-color 0.5s;
 -ms-transition: color 0.5s, background-color 0.5s;
 -o-transition: color 0.5s, background-color 0.5s;
 transition: color 0.5s, background-color 0.5s;
 -webkit-animation: on .6s ease-in-out 4s forwards;
 -moz-animation: on .6s ease-in-out 4s forwards;
 -o-animation: on .6s ease-in-out 4s forwards;
 animation: on .6s ease-in-out 4s forwards;
}
/* .text button:hover  */
 /* background: #f5d300;
 color: #191919;
 border: 1px solid #191919;
/*  */

.splash {
 width: 100vw;
 height: 100vh;
 position: fixed;
 top: 0;
 display: -webkit-box;
 display: -webkit-flex;
 display: -ms-flexbox;
 display: flex;
 overflow: hidden;
}
.splash_logo {
 position: absolute;
 margin: -15px 0 0 -25px;
 top: 50vh;
 z-index: 5;
 left: 50vw;
 width: 50px;
 text-align: center;
 height: 30px;
 font-size: 26px;
 font-weight: 600;
 color: #ffffff;
 opacity: 1;
 will-change: opacity;
 -webkit-animation: logo .3s ease-in 1.5s forwards, off .6s ease-in-out 3.2s forwards;
 -moz-animation: logo .3s ease-in 1.5s forwards, off .6s ease-in-out 3.2s forwards;
 -o-animation: logo .3s ease-in 1.5s forwards, off .6s ease-in-out 3.2s forwards;
 animation: logo .3s ease-in 1.5s forwards, off .6s ease-in-out 3.2s forwards;
}
.splash_logo:before {
 display: block;
 position: absolute;
 left: 15px;
 bottom: -5px;
 width: 20px;
 height: 1px;
 background-color: #757474;
 content: "";
}
.splash_logo:after {
 display: block;
 position: absolute;
 left: 15px;
 top: -5px;
 width: 20px;
 height: 1px;
 background-color: #757474;
 content: "";
 will-change: width;
}
.splash_svg {
 position: relative;
 margin: auto;
 top: 0;
 left: 0;
 width: 100%;
 height: 100%;
 bottom: 0;
 right: 0;
}
.splash_svg svg {
 width: 100%;
 height: 100%;
 -webkit-backface-visibility: visible;
 backface-visibility: visible;
}
.splash_svg svg rect {
 width: 100%;
 height: 100%;
 fill: #f5d300;
 stroke: 0;
 -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
 clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
 -webkit-animation: expand .7s ease-in forwards 2.7s;
 -moz-animation: expand .7s ease-in forwards 2.7s;
 -o-animation: expand .7s ease-in forwards 2.7s;
 animation: expand .7s ease-in forwards 2.7s;
}
.splash_minimize {
 position: absolute;
 margin: auto;
 width: 100%;
 height: 100%;
 top: 0;
 left: 0;
 z-index: 4;
}
.splash_minimize svg {
 width: 100%;
 height: 100%;
 -webkit-backface-visibility: visible;
 backface-visibility: visible;
}
.splash_minimize svg rect {
 width: 100%;
 height: 100%;
 -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
 clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
 -webkit-animation: scale .2s ease-out forwards 1s, hide 1.3s ease-out forwards 1.2s;
 -moz-animation: scale .2s ease-out forwards 1s, hide 1.3s ease-out forwards 1.2s;
 -o-animation: scale .2s ease-out forwards 1s, hide 1.3s ease-out forwards 1.2s;
 animation: scale .2s ease-out forwards 1s, hide 1.3s ease-out forwards 1.2s;
}

@-webkit-keyframes scale {
 100% {
   -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
   clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
 }
}
@-moz-keyframes scale {
 100% {
   -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
   clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
 }
}
@-o-keyframes scale {
 100% {
   -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
   clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
 }
}
@keyframes scale {
 100% {
   -webkit-clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
   clip-path: polygon(45vw 40vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
 }
}
@-webkit-keyframes hide {
 100% {
   fill: transparent;
 }
}
@-moz-keyframes hide {
 100% {
   fill: transparent;
 }
}
@-o-keyframes hide {
 100% {
   fill: transparent;
 }
}
@keyframes hide {
 100% {
   fill: transparent;
 }
}
@-webkit-keyframes off {
 100% {
   opacity: 0;
 }
}
@-moz-keyframes off {
 100% {
   opacity: 0;
 }
}
@-o-keyframes off {
 100% {
   opacity: 0;
 }
}
@keyframes off {
 100% {
   opacity: 0;
 }
}
@-webkit-keyframes on {
 100% {
   opacity: 1;
 }
}
@-moz-keyframes on {
 100% {
   opacity: 1;
 }
}
@-o-keyframes on {
 100% {
   opacity: 1;
 }
}
@keyframes on {
 100% {
   opacity: 1;
 }
}
@-webkit-keyframes logo {
 100% {
   color: #292929;
 }
}
@-moz-keyframes logo {
 100% {
   color: #292929;
 }
}
@-o-keyframes logo {
 100% {
   color: #292929;
 }
}
@keyframes logo {
 100% {
   color: #292929;
 }
}
@-webkit-keyframes type {
 0% {
   width: 0;
 }
}
@-moz-keyframes type {
 0% {
   width: 0;
 }
}
@-o-keyframes type {
 0% {
   width: 0;
 }
}
@keyframes type {
 0% {
   width: 0;
 }
}
@-webkit-keyframes type2 {
 0% {
   width: 0;
 }
 50% {
   width: 0;
 }
 100% {
   width: 100;
 }
}
@-moz-keyframes type2 {
 0% {
   width: 0;
 }
 50% {
   width: 0;
 }
 100% {
   width: 100;
 }
}
@-o-keyframes type2 {
 0% {
   width: 0;
 }
 50% {
   width: 0;
 }
 100% {
   width: 100;
 }
}
@keyframes type2 {
 0% {
   width: 0;
 }
 50% {
   width: 0;
 }
 100% {
   width: 100;
 }
}
@-webkit-keyframes expand {
 25% {
   -webkit-clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 58vh, 45vw 58vh);
   clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
   fill: white;
 }
 50% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
   fill: #f5d300;
 }
 75% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
   fill: white;
 }
 100% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
   fill: #f5d300;
 }
}
@-moz-keyframes expand {
 25% {
   -webkit-clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 58vh, 45vw 58vh);
   clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
   fill: white;
 }
 50% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
   fill: #f5d300;
 }
 75% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
   fill: white;
 }
 100% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
   fill: #f5d300;
 }
}
@-o-keyframes expand {
 25% {
   -webkit-clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 58vh, 45vw 58vh);
   clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
   fill: white;
 }
 50% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
   fill: #f5d300;
 }
 75% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
   fill: white;
 }
 100% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
   fill: #f5d300;
 }
}
@keyframes expand {
 25% {
   -webkit-clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 58vh, 45vw 58vh);
   clip-path: polygon(0vw 0vh, 55vw 40vh, 55vw 60vh, 45vw 60vh);
   fill: white;
 }
 50% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 45vw 60vh);
   fill: #f5d300;
 }
 75% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 55vw 60vh, 0vw 100vh);
   fill: white;
 }
 100% {
   -webkit-clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
   clip-path: polygon(0vw 0vh, 100vw 0vh, 100vw 100vh, 0vw 100vh);
   fill: #f5d300;
 }

}
    </style>
</head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>

    <div class="splash">
        <div class="splash_logo">
          DS
        </div>
        <div class="splash_svg">
          <svg width="100%" height="100%">
            <rect width="100%" height="100%" >
          </svg>
        </div>
        <div class="splash_minimize">
          <svg width="100%" height="100%">
            <rect width="100%" height="100%" >
          </svg>
        </div>
      </div>
      <div class="text" style="background-color: #000">


    <nav style="transition: all 0.7s ease-in-out;" class="navbar navbar-expand-md fixed-top navbar-dark">
        <a class="navbar-brand" style="font-weight: 600" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto" style="margin-right:40px;">
                <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#siapa-kami">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">GALERY</a>
                </li>
            </ul>

        </div>
    </nav>


    <div class="jumbotron" style=" border-radius : 0px; margin-bottom : 0px">
    <div class="text-center">
        <h1 class="display-4 text-light"
        style="font-weight: 600; font-family:Verdana, Geneva, Tahoma, sans-serif; margin-top:5%;" >Deo's
        Studio</h1>
    </div>
    </div>

    <section class="gallery-block compact-gallery" style="background-color: black" >

        <div class="container" style="margin-top: -10%">
            <div class="heading">
                {{-- <h2 class="text-white">Compact Gallery</h2> --}}
            </div>
            <div class="row no-gutters">

                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('img/anya.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('img/anya.jpg') }}">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('img/anya.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('img/anya.jpg') }}">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('img/anya.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('img/anya.jpg') }}">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('img/anya.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('img/anya.jpg') }}">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('img/anya.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('img/anya.jpg') }}">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('img/anya.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('img/anya.jpg') }}">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('img/anya.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('img/anya.jpg') }}">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('img/anya.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('img/anya.jpg') }}">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{ asset('img/anya.jpg') }}">
                        <img class="img-fluid image" src="{{ asset('img/anya.jpg') }}">
                        <span class="description">
                            <span class="description-heading">Lorem Ipsum</span>
                            <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

{{--
        <div class="jumbotron5 text-center" style="margin-top: -240px; margin-bottom: 150px;height: 100%;" >
            <br><br>
        <br><br>
        <br><br>
        <br><br>
        <div class="col-md-12 text-center page-footer"   data-aos-duration="1000" data-aos-delay="500">
            <h4 class="" style="font-weight: 600; font-size : 3rem;">Let's have a little talk</h4>
            <h3 class=""
                style="font-weight: 600; font-size : 3.4rem;margin-top : -20px; color :#acacac;">0921 - 3989 - 9382</h3>
            <ul class="social-network social-circle">
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-google"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div> --}}
    <div class="jumbotron5 jumbotron-fluid">

            <div class="text-center">
                   &copy;Copyright
      
      </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.compact-gallery', {
            animation: 'slideIn'
        });
    </script>

<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
 </script>
 <script type="text/javascript">
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
    });
 </script>


</body>

</html>
