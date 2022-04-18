   <title>Deo's studio</title>
    <link rel="icon" href="{{ asset('img/ima.png') }}">

<style>
    #demo {
       height: 100%;
       position: relative;
       overflow: hidden;
   }


   .green {
       background-color: #6fb936;
   }

   .thumb {
       margin-bottom: 30px;
   }

   .page-top {
       margin-top: 85px;
   }


   img.zoom {
       width: 100%;
       height: 200px;
       border-radius: 5px;
       object-fit: cover;
       -webkit-transition: all .3s ease-in-out;
       -moz-transition: all .3s ease-in-out;
       -o-transition: all .3s ease-in-out;
       -ms-transition: all .3s ease-in-out;
   }


   .transition {
       -webkit-transform: scale(1.2);
       -moz-transform: scale(1.2);
       -o-transform: scale(1.2);
       transform: scale(1.2);
   }

   .modal-header {

       border-bottom: none;
   }

   .modal-title {
       color: #000;
   }

   .modal-footer {
       display: none;
   }

   .jumbotron {
       height: 100vh;
       /* background-image: url('img/deo.jpg'); */
       background-size: cover;
       /* filter: brightness(50%); */
       background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url('img/deo.jpg');
       /* background-repeat: no-repeat; */
   }

   /*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
   .fancybox-wrap,
   .fancybox-skin,
   .fancybox-outer,
   .fancybox-inner,
   .fancybox-image,
   .fancybox-wrap iframe,
   .fancybox-wrap object,
   .fancybox-nav,
   .fancybox-nav span,
   .fancybox-tmp {
       padding: 0;
       margin: 0;
       border: 0;
       outline: 0;
       vertical-align: top
   }

   .fancybox-wrap {
       position: absolute;
       top: 0;
       left: 0;
       z-index: 8020
   }

   .fancybox-skin {
       position: relative;
       background: #1f1c1c;
       color: #444;
       text-shadow: none;
       -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
       border-radius: 4px
   }

   .fancybox-opened {
       z-index: 8030
   }

   .fancybox-opened .fancybox-skin {
       -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, .5);
       -moz-box-shadow: 0 10px 25px rgba(0, 0, 0, .5);
       box-shadow: 0 10px 25px rgba(0, 0, 0, .5)
   }

   .fancybox-outer,
   .fancybox-inner {
       position: relative
   }

   .fancybox-inner {
       overflow: hidden
   }

   .fancybox-type-iframe .fancybox-inner {
       -webkit-overflow-scrolling: touch
   }

   .fancybox-error {
       color: #444;
       font: 14px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
       margin: 0;
       padding: 15px;
       white-space: nowrap
   }

   .fancybox-image,
   .fancybox-iframe {
       display: block;
       width: 100%;
       height: 100%
   }

   .fancybox-image {
       max-width: 100%;
       max-height: 100%
   }

   #fancybox-loading,
   .fancybox-close,
   .fancybox-prev span,
   .fancybox-next span {
       background-image: url(fancybox_sprite.png)
   }

   #fancybox-loading {
       position: fixed;
       top: 50%;
       left: 50%;
       margin-top: -22px;
       margin-left: -22px;
       background-position: 0 -108px;
       opacity: .8;
       cursor: pointer;
       z-index: 8060
   }

   #fancybox-loading div {
       width: 44px;
       height: 44px;
       background: url(fancybox_loading.gif) center center no-repeat
   }

   .fancybox-close {
       position: absolute;
       top: -18px;
       right: -18px;
       width: 36px;
       height: 36px;
       cursor: pointer;
       z-index: 8040
   }

   .fancybox-nav {
       position: absolute;
       top: 0;
       width: 40%;
       height: 100%;
       cursor: pointer;
       text-decoration: none;
       background: transparent url(blank.gif);
       -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
       z-index: 8040
   }

   .fancybox-prev {
       left: 0
   }

   .fancybox-next {
       right: 0
   }

   .fancybox-nav span {
       position: absolute;
       top: 50%;
       width: 36px;
       height: 34px;
       margin-top: -18px;
       cursor: pointer;
       z-index: 8040;
       visibility: hidden
   }

   .fancybox-prev span {
       left: 10px;
       background-position: 0 -36px
   }

   .fancybox-next span {
       right: 10px;
       background-position: 0 -72px
   }

   .fancybox-nav:hover span {
       visibility: visible
   }

   .fancybox-tmp {
       position: absolute;
       top: -99999px;
       left: -99999px;
       visibility: hidden;
       max-width: 99999px;
       max-height: 99999px;
       overflow: visible !important
   }

   .fancybox-lock {
       overflow: hidden !important;
       width: auto
   }

   .fancybox-lock body {
       overflow: hidden !important
   }

   .fancybox-lock-test {
       overflow-y: hidden !important
   }

   .fancybox-overlay {
       position: absolute;
       top: 0;
       left: 0;
       overflow: hidden;
       display: none;
       z-index: 8010;
       background: url(fancybox_overlay.png)
   }

   .fancybox-overlay-fixed {
       position: fixed;
       bottom: 0;
       right: 0
   }

   .fancybox-lock .fancybox-overlay {
       overflow: auto;
       overflow-y: scroll
   }

   .fancybox-title {
       visibility: hidden;
       font: 400 13px/20px "Helvetica Neue", Helvetica, Arial, sans-serif;
       position: relative;
       text-shadow: none;
       z-index: 8050
   }

   .fancybox-opened .fancybox-title {
       visibility: visible
   }

   .fancybox-title-float-wrap {
       position: absolute;
       bottom: 0;
       right: 50%;
       margin-bottom: -35px;
       z-index: 8050;
       text-align: center
   }

   .fancybox-title-float-wrap .child {
       display: inline-block;
       margin-right: -100%;
       padding: 2px 20px;
       background: transparent;
       background: rgba(0, 0, 0, .8);
       -webkit-border-radius: 15px;
       -moz-border-radius: 15px;
       border-radius: 15px;
       text-shadow: 0 1px 2px #222;
       color: rgb(131, 76, 76);
       font-weight: 700;
       line-height: 24px;
       white-space: nowrap
   }

   .fancybox-title-outside-wrap {
       position: relative;
       margin-top: 10px;
       color: rgb(182, 97, 97)
   }

   .fancybox-title-inside-wrap {
       padding-top: 10px
   }

   .fancybox-title-over-wrap {
       position: absolute;
       bottom: 0;
       left: 0;
       color: rgb(46, 23, 23);
       padding: 10px;
       background: #000;
       background: rgba(0, 0, 0, .8)
   }

   @media only screen and (-webkit-min-device-pixel-ratio:1.5),
   only screen and (min--moz-device-pixel-ratio:1.5),
   only screen and (min-device-pixel-ratio:1.5) {

       #fancybox-loading,
       .fancybox-close,
       .fancybox-prev span,
       .fancybox-next span {
           background-image: url(fancybox_sprite@2x.png);
           background-size: 44px 152px
       }

       #fancybox-loading div {
           background-image: url(fancybox_loading@2x.gif);
           background-size: 24px 24px
       }
   }
body {
 background-color: #191919;
 font-family: "Open Sans", sans-serif;
}

.text {
 opacity: 0;
 /* position: absolute; */
 z-index: 7;
 padding-top: 5%;


 font-size: 48px;
 font-weight: 700;
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
 background: #191919;
 color: #f5d300;
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
.text button:hover {
 background: #f5d300;
 color: #191919;
 border: 1px solid #191919;
}

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
.gambar .content{
    position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
</style>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

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
               {{-- <a class="nav-link" href="#">ABOUT</a> --}}
           </li>
           <li class="nav-item">
               <a class="nav-link" href="{{route('index')}}">GALERY</a>
           </li>
       </ul>

   </div>
</nav>

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


   <div class="container " >

   <div class="jumbotron" style=" border-radius : 0px; margin-bottom : 0px; ">
       <div class="row">
           <div class="col-8 mx-auto">
               <div class="text-center">
                   <h1 class="display-4 text-light"
                       style="margin-top:20%;font-weight: 600; font-family:Verdana, Geneva, Tahoma, sans-serif">Gallery
                   </h1>

               </div>
           </div>
       </div>
   </div>

   <div class="container page-top">



       <div class="row">


           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                   class="fancybox" rel="ligthbox">
                   <img src="https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                       class="zoom img-fluid " alt="">



               </a>
           </div>
           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                   class="fancybox" rel="ligthbox">
                   <img src="https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                       class="zoom img-fluid" alt="">
               </a>
           </div>

           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                   class="fancybox" rel="ligthbox">
                   <img src="https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                       class="zoom img-fluid " alt="">
               </a>
           </div>

           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                   class="fancybox" rel="ligthbox">
                   <img src="https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                       class="zoom img-fluid " alt="">
               </a>
           </div>

           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                   class="fancybox" rel="ligthbox">
                   <img src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                       class="zoom img-fluid " alt="">
               </a>
           </div>

           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                   class="fancybox" rel="ligthbox">
                   <img src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                       class="zoom img-fluid " alt="">
               </a>
           </div>

           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                   class="fancybox" rel="ligthbox">
                   <img src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                       class="zoom img-fluid " alt="">
               </a>
           </div>

           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                   class="fancybox" rel="ligthbox">
                   <img src="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                       class="zoom img-fluid " alt="">
               </a>
           </div>
           <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                class="fancybox " rel="ligthbox">
                <img src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                    class="zoom img-fluid " alt="">
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                class="fancybox" rel="ligthbox">
                <img src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                    class="zoom img-fluid " alt="">
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                class="fancybox" rel="ligthbox">
                <img src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    class="zoom img-fluid " alt="">
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                class="fancybox" rel="ligthbox">
                <img src="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    class="zoom img-fluid " alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                class="fancybox" rel="ligthbox">
                <img src="https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                    class="zoom img-fluid " alt="">
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                class="fancybox" rel="ligthbox">
                <img src="https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940"
                    class="zoom img-fluid " alt="">
                    <div class="content">
                        <h1>Heading</h1>
                        <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
                      </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                class="fancybox" rel="ligthbox">
                <img src="https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    class="zoom img-fluid " alt="">
            </a>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                class="fancybox" rel="ligthbox">
                <img src="https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                    class="zoom img-fluid " alt="">

            </a>
        </div>



       </div>




   </div>
</div>
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



 </div>
