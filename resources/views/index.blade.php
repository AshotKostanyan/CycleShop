<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Cycle</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>

    <!-- header section start -->
    <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: auto; max-width:1526px;">
            <a href="index.html" class="logo"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ourCycle">Our Cycle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="login_menu">
                        <ul>
                            @if (auth()->user() == null)
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">Register</a></li>
                            @else
                                <li><a href="/logout">Logout</a></li>
                            @endif

                            <li><a href="getcart"><img src="images/trolly-icon.png"></a></li>
                        </ul>
                    </div>
                    <div></div>
                </form>
            </div>
            <div id="main">
                <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><img
                        src="images/toggle-icon.png" style="height: 30px;"></span>
            </div>
        </nav>
        <div class="main-content">
            <!-- banner section start -->
            <div class="banner_section layout_padding">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @php($i = 1)
                        @php($isActive = [])
                        @for ($i = 0; $i <= count($dataSet['NewModelCycles']); ++$i)
                            @php($isActive[$i] = '')
                        @endfor
                        @php($isActive[1] = 'active')

                        @for ($i = 1; $i <= count($dataSet['NewModelCycles']); ++$i)
                            <div @class(['carousel-item', $isActive[$i]])>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="best_text">Best</div>
                                            <div class="image_1"><img
                                                    src="images/{{ $dataSet['NewModelCycles']['cycle0' . $i]->image }}">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <h1 class="banner_taital">
                                                {{ $dataSet['NewModelCycles']['cycle0' . $i]->name }}</h1>
                                            <p class="banner_text">
                                                {{ $dataSet['NewModelCycles']['cycle0' . $i]->desc }}
                                            </p>
                                            <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- cycle section start -->
    <div class="main-content">
        <div class="cycle_section layout_padding">
            <div class="container">
                <h1 class="cycle_taital">Our cycle</h1>
                <p class="cycle_text">It is a long established fact that a reader will be distracted by the </p>
                <div class="cycle_section_2 layout_padding">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box_main">
                                <h6 class="number_text">01</h6>
                                <div class="image_2"><img
                                        src="images/{{ $dataSet['NewModelCycles']['cycle01']->image }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="cycles_text">{{ $dataSet['NewModelCycles']['cycle01']->name }}</h1>
                            <p class="lorem_text">{{ $dataSet['NewModelCycles']['cycle01']->desc }}</p>
                            <div class="btn_main">
                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                <button type="button"><a
                                        href="/addtocart/{{ $dataSet['NewModelCycles']['cycle01']->id }}">add to
                                        cart</a></button>
                                <h4 class="price_text">Price <span style=" color: #325662; height:480px">
                                        {{ $dataSet['NewModelCycles']['cycle01']->price }}</span></h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="cycle_section_3 layout_padding">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="cycles_text">{{ $dataSet['NewModelCycles']['cycle02']->name }}</h1>
                            <p class="lorem_text">{{ $dataSet['NewModelCycles']['cycle02']->desc }}</p>
                            <div class="btn_main">
                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                <button type="button"><a
                                        href="/addtocart/{{ $dataSet['NewModelCycles']['cycle02']->id }}">add to
                                        cart</a></button>
                                <h4 class="price_text">Price </span> <span
                                        style=" color: #325662">{{ $dataSet['NewModelCycles']['cycle02']->price }}</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box_main_3">
                                <h6 class="number_text_2">02</h6>
                                <div class="image_2"><img
                                        src="images/{{ $dataSet['NewModelCycles']['cycle02']->image }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cycle_section_2 layout_padding">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="box_main_3">
                                <h6 class="number_text_2">03</h6>
                                <div class="image_2"><img
                                        src="images/{{ $dataSet['NewModelCycles']['cycle03']->image }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="cycles_text">{{ $dataSet['NewModelCycles']['cycle03']->name }}</h1>
                            <p class="lorem_text">{{ $dataSet['NewModelCycles']['cycle03']->desc }}</p>
                            <div class="btn_main">
                                <div class="buy_bt"><a href="#">Buy Now</a></div>
                                <button type="button"><a
                                        href="/addtocart/{{ $dataSet['NewModelCycles']['cycle03']->id }}">add to
                                        cart</a></button>
                                <h4 class="price_text">Price <span
                                        style=" color: #325662">{{ $dataSet['NewModelCycles']['cycle03']->price }}</span>
                                </h4>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="read_btn_main">
                    <div class="read_bt"><a href="#">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- cycle section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <h1 class="about_taital">About Our cycle Store</h1>
            <p class="about_text">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                more-or-less normal distribution of letters
            </p>
            <div class="about_main">
                <img src="images/img-5.png" class="image_5">
            </div>
            <div class="read_bt_1"><a href="#">Read More</a></div>
        </div>
    </div>
    <!-- about section end -->
    <!-- client section start -->
    <div class="main-content">
        <div class="client_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php($i = 1)
                    @php($isActive = [])
                    @for ($i = 0; $i < count($dataSet['Comments']); ++$i)
                        @php($isActive[$i] = '')
                    @endfor
                    @php($isActive[0] = 'active')
                    @for ($i = 0; $i < count($dataSet['Comments']); ++$i)
                        <div @class(['carousel-item', $isActive[$i]])>
                            <div class="container">
                                <div class="client_main">
                                    <h1 class="client_taital">Comments</h1>
                                    <div class="client_section_2">
                                        <div class="client_left">
                                            <div><img src="images/client-img.png" class="client_img"></div>
                                        </div>
                                        <div class="client_right">
                                            <div class="quote_icon"><img src="images/quote-icon.png"></div>
                                            <p class="client_text">{{ $dataSet['Comments'][$i]->content }}</p>
                                            <h3 class="client_name">{{ $dataSet['Comments'][$i]->subject }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- client section end -->
    <!-- news section start -->
    <div class="news_section layout_padding">
        <div class="container">
            <h1 class="news_taital">News</h1>
            <p class="news_text">It is a long established fact that a reader will be distracted by the readable content
                of a page when looking at its layout. The point of using </p>
            <div class="news_section_2 layout_padding">
                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-sm-4">
                            <div class="box_main_1">
                                <div class="zoomout frame"><img src="{{ $dataSet['news'][$i]->image }}"></div>
                                <div class="padding_15">
                                    <h2 class="speed_text">{{ $dataSet['news'][$i]->title }}</h2>
                                    <div class="post_text">Post by : Den <span
                                            style="float: right;">{{ $dataSet['news'][$i]->date }}</span>
                                    </div>
                                    <p class="long_text">{{ $dataSet['news'][$i]->content }}</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <!-- news section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="contact_main">
                <h1 class="request_text">Add Comment</h1>
                <form action="{{ route('addcomment') }}" method="POST" id="comment">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Subject" name="subject" required>
                    </div>
                    @error('subject')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="content" required></textarea>
                    </div>
                    @error('content')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="send_btn">
                        <button style="border-radius: 10px;width:100px;"
                                type="submit"><a>SEND</a></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="main-content">
                    <div class="col-lg-8 col-sm-12 padding_0">
                        <div class="map_main">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.4177854970203!2d44.4888266122924!3d40.19976867135644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd6bbf260be5%3A0xfcd60dca516cdb29!2sMergelyan%20Institute!5e0!3m2!1sru!2sam!4v1694533531982!5m2!1sru!2sam" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="call_text"><a href="#"><img src="images/map-icon.png"><span
                                    class="padding_left_0">Page when looking at its layou</span></a></div>
                        <div class="call_text"><a href="#"><img src="images/call-icon.png"><span
                                    class="padding_left_0">Call Now +01 123467890</span></a></div>
                        <div class="call_text"><a href="#"><img src="images/mail-icon.png"><span
                                    class="padding_left_0">demo@gmail.com</span></a></div>
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon1.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                                <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2023 All Right Reserved By.<a href="https://html.design"> Free html
                    Templates</p>
            <p class="copyright_text">Disrtributed By. <a href="https://themewagon.com">Ashot</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";

        }

        $("#main").click(function() {
            $("#navbarSupportedContent").toggleClass("nav-normal")
        })

        document.getElementById('text').style = 'display:none;'
    </script>
</body>

</html>
