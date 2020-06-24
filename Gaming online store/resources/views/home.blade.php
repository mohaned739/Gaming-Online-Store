@extends('layout.master')

@section('title')
    Home
@endsection
@section('content')
    <link rel="stylesheet" href="../../public/css/home_style.css">

    <div style="border: solid;border-color: #4387b8;background-color: #FFDF00">
        <div style="width: 10%;height: 5%;color: #FFFFFF;background-color: #4387b8;display: inline-block">
            <h5>Important News</h5>
        </div>
        <marquee style="position: absolute;left: 10.4%;width: 89%;font-family: 'impact'" direction="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque itaque nihil placeat recusandae voluptas. A at consectetur deserunt dicta dolorem eius libero perferendis quam tempore vel? A, laudantium quia!</marquee>
    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" id="first_img">
                <img src="images/1.jpg" class="d-block w-100" alt="Anthem">
                {{--<div class="slide_text">--}}
                {{--<h1>The Power Of Gaming</h1>--}}
                {{--</div>--}}
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.6);width: 100%;height: 100%;position: absolute;left: 0%;top: 0%">
                    <div class="slide_text" style="position: absolute;left: 13%;top: 35%;border-left: 2px solid #20d8da;background: rgba(0,0,0,0.7)">
                        <h1>The power of gaming</h1>
                        <pre style="color: lightgray">


                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto, doloremque eaque
                                    eligendi ex excepturi explicabo facere itaque, laborum maiores minus neque nisi nostrum
                 optio soluta suscipit, ullam unde voluptate.
                    </pre>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100" alt="God Of War">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.6);width: 100%;height: 100%;position: absolute;left: 0%;top: 0%">
                    <div class="slide_text" style="position: absolute;left: 13%;top: 35%;border-left: 2px solid #20d8da;background: rgba(0,0,0,0.7)">
                        <h1>The power of gaming</h1>
                        <pre style="color: lightgray">


                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto, doloremque eaque
                                    eligendi ex excepturi explicabo facere itaque, laborum maiores minus neque nisi nostrum
                 optio soluta suscipit, ullam unde voluptate.
                    </pre>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100" alt="battlefront">
                <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.6);width: 100%;height: 100%;position: absolute;left: 0%;top: 0%">
                    <div class="slide_text" style="position: absolute;left: 13%;top: 35%;border-left: 2px solid #20d8da;background: rgba(0,0,0,0.7)">
                        <h1>The power of gaming</h1>
                        <pre style="color: lightgray">


                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto, doloremque eaque
                                    eligendi ex excepturi explicabo facere itaque, laborum maiores minus neque nisi nostrum
                 optio soluta suscipit, ullam unde voluptate.
                    </pre>
                    </div>
                </div>
            </div>
        </div>

        <a style="background: rgba(32,216,218,1);width: 10%;height: 10%;position: absolute;top: 50%" class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            Next Game
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid" id="consols" style="padding: 7%;padding-left: 15%">
        <div class="row">
            <div class="col-sm-4" id="ps">
                <center><img src="images/game1.jpg" style="height: 55px"><br><br><br>
                    {{--<button style="background: #20d8da;color: white;border: none;width: 45%;height: 50px">View Games</button>--}}
                </center></div>
            <div class="col-sm-4" id="xbox">
                <center><img src="images/game3.jpg" style="height: 55px"><br><br><br>
                    {{--<button style="background: #20d8da;color: white;border: none;width: 45%;height: 50px">View Games</button>--}}
                </center>
            </div>
            <div class="col-sm-4" id="xbox">
                <center><img src="images/game2.jpg" style="height: 55px"><br><br><br>
                    {{--<button style="background: #20d8da;color: white;border: none;width: 45%;height: 50px">View Games</button>--}}
                </center>
            </div>
        </div>
    </div>
@endsection