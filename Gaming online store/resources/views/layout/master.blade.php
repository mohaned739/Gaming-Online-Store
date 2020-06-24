<html>
<head>
    <title>@yield('head')</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #header{
            margin-top: 1.4%;
            position: relative;
            height: 10%;
        }
        #logo{
            position: absolute;
            left: 12%;
            height: 100%;
            width: 5%;
        }
        #search_btn{
            width: 10%;
            height: 39px;
            background: transparent;
            border-left: none;
            border-bottom: none;
            border-top: none;
            border-right: thick;
        }
        nav{
            background: white;
            height: 80px;
        }

        footer{
            background-color: black;
            /*background-image: url("public/images/pattern.png");*/
            color: white;
            background-repeat: repeat;
            border-top: 1px solid white;
        }
        #social_media{
            margin-right: 6%;
            width: 18%;
        }
        #social_media a{
            padding: 2%;
        }
        #log_reg:hover a{
            color: white;
             }
    </style>

{{--<link rel="stylesheet" href="css/login_style.css">--}}
</head>

<body>
<div id="header" class="container-fluid">
    <img src="images/logo4.png"  id="logo">
    <div style="position: absolute;left: 16%;top:43%">
    <a class="navbar-brand" href="{{ url('/') }}">
        <p style="font-family: 'Bauhaus 93';display: inline-block;font-size: 30px">ames </p>
        <p style="font-family: 'Bauhaus 93';display: inline-block;color: #FFDF00;font-size: 30px">Empire </p>
    </a>
    </div>
    {{--<form class="form-inline my-2 my-lg-0" style="margin-left: 65%">--}}
    {{--<input class="form-control " type="search" placeholder="Search" aria-label="Search">--}}
        {{--<button id="search_btn" type="submit" class="btn btn-outline-success mr-sm-2"><img src="images/icons/search_icon.png" style="height: 20px"></button>--}}
        {{--<button class="btn btn-outline-primary my-2 my-sm-0" id="log_reg"><a href="/login" style="text-decoration: none;">Login / Register</a></button>--}}
    {{--</form>--}}
    <ul style="margin-left: 87%" class="nav navbar-nav navbar-right  ">
        <!-- Authentication Links -->
        @if (Auth::guest())

            <li style="position: absolute;right:15%;margin-top: 2%"><a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a></li>
            <li style="position: absolute;margin-top: 2%"><a class="btn btn-outline-primary" href="{{ route('register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" >
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @if(Auth::user()->userRole)
                <a class="nav-link " href="/adminpanel" tabindex="-1"><b>Admin Panel</b></a>
            @endif
        @endif
    </ul>

</div>

<nav class="navbar sticky-top navbar-expand-lg navbar-light">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left: 12%">
            <li class="nav-item active">
                <a class="nav-link" href="/"><b>Home </b><span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/store" id="navbarDropdown" role="button">
                   <b>Store</b>
                </a>
            </li>

        </ul>

        <div id="social_media">
        <a href="https://www.facebook.com/mohaned.mohamed.140"><i class="fa fa-facebook" style="font-size:24px"></i></a>
            <a href="https://www.instagram.com/mohanedmohamed99/"><i class="fa fa-instagram" style="font-size:24px"></i></a>
        <a href="https://twitter.com/mohanedmoha99"><i class="fa fa-twitter" style="font-size:24px"></i></a>
        <a href="https://snapchat.com/"><i class="fa fa-snapchat" style="font-size:24px"></i></a>
       <a href="https://www.twitch.tv/"><i class="fa fa-twitch" style="font-size:24px"></i></a>
        <a href="https://www.linkedin.com/in/mohaned-mohamed-b46a8418a"><i class="fa fa-linkedin" style="font-size:24px"></i></a>
        <a href="https://aboutme.google.com/u/0/?referer=gplus"><i class="fa fa-google-plus" style="font-size:24px"></i></a>
        </div>

    </div>
</nav>



@yield('content')

<footer class="container-fluid " >
    <div class="row">
        <div class="col-sm-6">
            <center><p style="font-size: 20px">About Us</p><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>  Doloremque Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit. Blanditiis dolorum non perspiciatis quaerat.<br>     Debitis deserunt doloremque ea fugiat harum
            </center>
        </div>
        <div id="Contacts" class="col-sm-6">
            <center><p style="font-size: 20px">Contacts</p>
                Email : mohaned.mohamed9999@gmail.com<br>
                Phone : +201118107511</center>
        </div>
        <div id="social" class="col-sm-12">
            <center><p style="font-size: 20px">Follow Us</p>
                <a href="https://www.facebook.com/mohaned.mohamed.140" target="_blank"><img src="images/social%20media/fb.png" style="width: 80px;height: 80px"></a>
                <a href="https://www.instagram.com/mohanedmohamed99/" target="_blank"><img src="images/social%20media/insta.png" style="width: 55px;height: 55px"></a>&nbsp;&nbsp;&nbsp;
                <a href="https://twitter.com/mohanedmoha99" target="_blank"><img src="images/social%20media/twitter.png" style="width: 50px;height: 50px"></a> </center>
        </div>
    </div>



    {{--<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">--}}

        {{--<div class="container-fluid" id="login">--}}
            {{--<center><h1 style="color: white;margin-top: 10%">ACCOUNT LOGIN</h1></center>--}}
            {{--<div class="container" id="contain">--}}
                {{--<center><form id="loginform" name="loginform">--}}
                        {{--<div id="user" class="container-fluid">--}}
                            {{--<i class="far fa-user-circle"></i><input type="text" id="username" name="username" placeholder="User name" autocomplete="off">--}}
                        {{--</div>--}}
                        {{--<hr id="line" style="background: lightgray">--}}
                        {{--<div id="pass" class="container-fluid">--}}
                            {{--<i class="fas fa-unlock"></i><input type="password" id="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'">--}}
                        {{--</div>--}}
                        {{--<hr id="line2" style="background: lightgray">--}}
                        {{--<div id="btn1" >--}}
            {{--<input type="submit" id="login_btn" value="LOGIN" style="background: transparent;color: white;font-weight: bolder;">--}}
                        {{--</div>--}}
                        {{--<p style="color: black"><u>Don't Have Account? </u><a href="/register">SinUp</a></p>--}}
                    {{--</form></center>--}}
            {{--</div>--}}
        {{--</div>--}}


    {{--</div>--}}

</footer>
<script>
    var user=document.getElementById("username");
    var pass=document.getElementById("password");
    var line=document.getElementById("line");
    var line2=document.getElementById("line2");
    user.onfocus=function () {
        this.placeholder="";
        line.style.background="-webkit-linear-gradient(left, #4e5c98, #c77ff2, #4e5c98, #c77ff2)";
        document.getElementById("user").style.transform="translateX(-2%)";
    }
    user.onblur=function () {
        this.placeholder="User name";
        line.style.background="lightgray"
        document.getElementById("user").style.transform="translateX(0%)";
    }
    pass.onfocus=function () {
        this.placeholder="";
        line2.style.background="-webkit-linear-gradient(top, #4e5c98, #c77ff2, #4e5c98, #c77ff2)";
        document.getElementById("pass").style.transform="translateX(-2%)";
    }
    pass.onblur=function () {
        this.placeholder="Password";
        line2.style.background="lightgray"
        document.getElementById("pass").style.transform="translateX(0%)";
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>