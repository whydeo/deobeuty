<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<style>
    .jumbotron {
        height: 100vh;
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
        height: 100%;
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
        height: 100%;
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
        height: 130px;
        width: 130px;
    }

    .material-icons.md-48 {
        font-size: 48px;
    }

    .material-icons.orange600 {
        color: #FB8C00;
    }

</style>
<body>
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

    <div class="jumbotron" style=" border-radius : 0px; margin-bottom : 0px">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="text-center">
                    <h1 class="display-4 text-light" style="margin-top:20%;font-weight: 600; font-family:Verdana, Geneva, Tahoma, sans-serif">Deo's
                        Studio</h1>
                    <div class="lead text-light" style="">When you design in STUDIO, every stroke gets
                        code generated ready to go live. CMS, IDE and Analytics are integrated for seamless
                        customizations. Cross-team collaboration is built along every step.</div>
                </div>
                <div class="col-3 mx-auto text-center">
                    <div class="btn tombol-putih mt-3 ">kam to play &#128540;</div>
                </div>
            </div>
        </div>
    </div>



    <div class="jumbotron2" style=" border-radius : 0px;">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5" style="margin-right: 30px;">



                    <div class="special" style="margin-top : 40%;">
                        <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" class="topNav text-white" style="font-size : 32px; text-decoration : none;">siapa kami ?</a>
                        <div class="logo">
                            <div class="lingkeran" style="margin-left: 50px">
                                <i class="medium material-icons" style="margin-top: 15px;">accessibility</i>
                            </div>
                        </div>
                        <div class="bottomNav text-white collapse multi-collapse" id="multiCollapseExample1" style="font-weight : 0; font-size: 14px;">kami adalah team Studio Deo, sebuah team yang
                            menyediakan jasa yang berhubungan dengan fotografi dan videografi, sampai penyewaan studio
                        </div>
                    </div>


                    <div class="special" style="margin-top : 20%;">
                        <a data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2" class="topNav text-white" style="font-size : 32px; text-decoration : none;">kenapa kami ?</a>
                        <div class="logo">
                            <div class="lingkeran" style="margin-left: 50px">
                                <i class="medium material-icons" style="margin-top: 15px;">accessibility</i>
                            </div>
                        </div>
                        <div class="bottomNav text-white collapse multi-collapse" id="multiCollapseExample2" style="font-weight : 0; font-size: 14px;">karena kami menyediakan pelayanan dengan kualitas
                            yang baik namun dengan harga yang masih terjangkau </div>
                    </div>

                </div>


                <div class="col-md-2" style="background-color: ;  display: flex;
                align-items: center; margin-top :10%;     margin-left: -40px;">
                    <div class="arrow">
                        <span></span>

                        <span></span>

                    </div>
                    <div class="lingkeran-gendut">
                        <img src="{{ asset('img/gitar.png') }}" alt="" style="margin-top: -50px">
                    </div>
                </div>


                <div class="col-md-5" style="background-color: ">

                    <div class="special" style="margin-top : 40%;">
                        <a data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3" class="topNav text-white" style="font-size : 32px; text-decoration : none;">keunggulan kami ?</a>
                        <div class="logo">
                            <div class="lingkeran" style="margin-left: 50px">
                                <i class="medium material-icons" style="margin-top: 15px;">accessibility</i>
                            </div>
                        </div>
                        <div class="bottomNav text-white collapse multi-collapse" id="multiCollapseExample3" style="font-weight : 0; font-size: 14px;">kami memiliki kamera dan peralatan dengan kualitas tinggi, dimana kami menjamin bahwa penyewa tidak akan kecewa saat menyewa layanan kami</div>
                    </div>


                    <div class="special" style="margin-top : 20%;">
                        <a data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4" class="topNav text-white" style="font-size : 32px; text-decoration : none;">tujuan kami ?</a>
                        <div class="logo">
                            <div class="lingkeran" style="margin-left: 50px">
                                <i class="medium material-icons" style="margin-top: 15px;">accessibility</i>
                            </div>
                        </div>
                        <div class="bottomNav text-white collapse multi-collapse" id="multiCollapseExample4" style="font-weight : 0; font-size: 14px;">menyediakan fotografi dan videografi dengan harga yang dapat djijangkau oleh seluruh kalangan masyarakat</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2A2E34" fill-opacity="1" d="M0,96L1440,192L1440,0L0,0Z"></path>
    </svg>

    <div class="jumbotron3  " style=" border-radius : 0px;margin-top : -225px">
        <br>

        <div class="container">
            <div class="text-center">
                <h1 class="display-4 text-light" style="margin-top:10%;font-weight: 600; font-family:Verdana, Geneva, Tahoma, sans-serif">Layanan yang kami berikan</h1>
            </div>
            <br>
            <br>
            <div class="row " style="margin-top: ">

                <div class="col">
                    <center>
                        {{-- <i class="bi-stars" style="font-size: 2rem;color: rgb(239, 163, 11)"></i> --}}
                        <span class="material-icons md-48 orange600">home</span>

                    </center>
                    <br>
                    <center>
                        <h5 class="text-light">Meningkatkan kredibilitas</h5>
                        <p style="color:rgb(210, 200, 200) ;" style="color:rgb(210, 200, 200) ;">Add a position: fixed to the .jumbotron class, then set top: 0 to get the element fixed to the very top of the browser viewport. I would set a width:100% as the position:fixed will shrink your element.</p>

                    </center>
                </div>
                <div class="col">

                    <center>
                        {{-- <i class="bi-alarm" style="font-size: 2rem;color: rgb(239, 163, 11)"></i> --}}
                        <span class="material-icons md-48 orange600">face</span>
                    </center>
                    <br>
                    <center>
                        <h5 class="text-light">Efisien</h5>
                        <p style="color:rgb(210, 200, 200) ;">Add a position: fixed to the .jumbotron class, then set top: 0 to get the element fixed to the very top of the browser viewport. I would set a width:100% as the position:fixed will shrink your element.</p>
                    </center>

                </div>
                <div class="col">
                    <center>
                        <span class="material-icons md-48 orange600">clock</span>
                    </center>
                    <br>
                    <center>
                        <h5 class="text-light">Pasar yang luas</h5>
                        <p style="color:rgb(210, 200, 200) ;">Add a position: fixed to the .jumbotron class, then set top: 0 to get the element fixed to the very top of the browser viewport. I would set a width:100% as the position:fixed will shrink your element.</p>
                    </center>
                </div>
                <div class="col">
                    <center>
                        <span class="material-icons md-48 orange600">book</span>
                    </center>
                    <br>
                    <center>
                        <h5 class="text-light">Informasi yang lengkap</h5>
                        <p style="color:rgb(210, 200, 200) ;">Add a position: fixed to the .jumbotron class, then set top: 0 to get the element fixed to the very top of the browser viewport. I would set a width:100% as the position:fixed will shrink your element.</p>
                    </center>
                </div>
                <div class="col">
                    <center>
                        <span class="material-icons md-48 orange600">clock</span>
                    </center>
                    <br>
                    <center>
                        <h5 class="text-light">Buka 24 jam</h5>
                        <p style="color:rgb(210, 200, 200) ;">Add a position: fixed to the .jumbotron class, then set top: 0 to get the element fixed to the very top of the browser viewport. I would set a width:100% as the position:fixed will shrink your element.</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#787878" fill-opacity="1" d="M0,160L1440,64L1440,0L0,0Z"></path>
    </svg>
    <div class="jumbotron4" style=" border-radius : 0px; margin-top : -280px;">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="text-center">
                    <h1 class="display-4 text-light" style="margin-top:20%;font-weight: 600; font-family:Verdana, Geneva, Tahoma, sans-serif">Our Testimonial's</h1>
                    <br><br>
                    <br><br>
                </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="container">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus suscipit reprehenderit quos eius delectus, explicabo laborum ipsam voluptatem similique vero repudiandae rerum vel officiis quod omnis doloremque culpa in sed.</p>
                                        <div class="col">
                                            <img src="img/download.jpg" alt="Avatar">
                                        </div>
                                        <div class="col mr-4">
                                            <br>
                                            <h4>Yafet</h4>

                                            <p>Designer</p>
                                        </div>

                                        <div class="col"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus suscipit reprehenderit quos eius delectus, explicabo laborum ipsam voluptatem similique vero repudiandae rerum vel officiis quod omnis doloremque culpa in sed.</p>
                                    <div class="col">
                                        <img src="img/download.jpg" alt="Avatar">
                                    </div>
                                    <div class="col mr-4">
                                        <br>
                                        <h4>Deo</h4>

                                        <p>Designer</p>
                                    </div>

                                    <div class="col"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container"></div>

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
            </script>


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
