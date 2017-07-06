
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NS-main page</title>
    <link href="tree.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="icon" href="img/images.jpg" type="image/jpg"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/>
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->
    <script src="js/jquery-2.1.1.min.js"></script>
</head>

<!--<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onLoad="window.open ('hbd.php','mywindow1','status=1,width=450,height=450,left=400,top=100,menubar=no,location=no,resizable=no,scrollbars=no')" >-->
<body id="page-top" data-spy="scroll">



<div class="modal fade" id="modal-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title" align="center" style="color:#00aacf">Happy Birthday</h2>
            </div>
            <div class="modal-body">

                <?php
                        $con=mysql_connect("localhost","root","");
                        if(!$con){
	                                 die("can not connect".mysql_error());
                                 }
                        mysql_select_db("belns",$con);
                        $sql="SELECT * FROM bdy";
                        $myData = mysql_query($sql,$con);
                        $today = date("d-m");
                        while($record = mysql_fetch_array($myData)){
                        if( $today==$record['date']){  ?>
                <span style="color:hotpink"><b><?php     echo $record['name'] ;     ?>, </span>
                    <?php     }
							}

                                   mysql_close($con);
                           ?>

                    Wishing you a very happy birthday, may god bless you!!</b>
                <img src="birthday-card-with-glossy-balloons_23-2147506734.jpg" width="100%">
            </div>
        </div>
    </div>
</div>

 <?php
       $con=mysql_connect("localhost","root","");
                        if(!$con){
	                                 die("can not connect".mysql_error());
                                 }
                        mysql_select_db("belns",$con);
                        $sql="SELECT * FROM bdy";
                        $myData = mysql_query($sql,$con);
                        $today = date("d-m");
                        while($record = mysql_fetch_array($myData)){
     if( $today==$record['date']){  
   echo "<script>";
   echo " $(window).load(function(){
        $('#modal-1').modal('show');
    });";
 echo "</script>";

						}}
                                   mysql_close($con);
                           ?>






<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="cntainer">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <table cellspacing="10"><tr><td>
                    <img id="bel" src="img/untitled.jpg" hspace="10"></td><td><span style="font-size: 20px"> BHARAT ELECTRONICS LIMITED </span></td></tr></table>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="padding-right:40px">
            <ul class="nav navbar-nav" id="ht" ><br><br>
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li>
                    <a class="page-scroll" href="#new"  style="font-size: 25px">WHAT'S NEW</a>
                </li>
                <li>
                    <a class="page-scroll" href="#ns1"  style="font-size: 25px" >NS-1</a>
                </li>
                <li>
                    <a class="page-scroll" href="#ns2"  style="font-size: 25px">NS-2</a>
                </li>
                
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro">





    <!-- Gallery -->
    <div class="cntainer">

        <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#screenshot-carousel" data-slide-to="1"></li>
                <li data-target="#screenshot-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">



                <div class="item active">
                    <div class="intro-body1">
                        <div class="cntainer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br><br><br>
                                    <h1 class="brand-heading"><br>WELCOME TO NS</h1><br>
                                    <p class="intro-text" style="font-size:22px"><b class="ab">BEL' S VISION & MISSION</b><br><br><b>VISION:</b>&emsp;To be a world-class enterprise in Professional Electronics.<br><b>MISSION:</b>&emsp; To be a customer focused, globally competitive company in Defence Electronics and in other chosen areas of Professional Electronics, through Quality, Technology and Innovation.</p>
                                    <a href="#counter" class="btn btn-circle page-scroll " id="button">
                                        <i class="fa fa-chevron-circle-down  animated fa-3x"></i> </a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="item">
                    <div class="intro-body2">
                        <div class="conainer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br><br><br>
                                    <h1 class="brand-heading"><br>WELCOME TO NS</h1><br>
                                    <p class="intro-text" style="font-size:22px"><b class="ab">BEL' S VISION & MISSION</b><br><br><b>VISION:</b>&emsp;To be a world-class enterprise in Professional Electronics.<br><b>MISSION:</b>&emsp; To be a customer focused, globally competitive company in Defence Electronics and in other chosen areas of Professional Electronics, through Quality, Technology and Innovation.</p>
                                    <a href="#counter" class="btn btn-circle page-scroll " id="button">
                                        <i class="fa fa-chevron-circle-down  animated fa-3x"></i> </a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="item">
                    <div class="intro-body3">
                        <div class="cntainer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2"><br><br><br>
                                    <h1 class="brand-heading"><br>WELCOME TO NS</h1><br>
                                    <p class="intro-text" style="font-size:22px"><b class="ab">BEL' S VISION & MISSION</b><br><br><b>VISION:</b>&emsp;To be a world-class enterprise in Professional Electronics.<br><b>MISSION:</b>&emsp; To be a customer focused, globally competitive company in Defence Electronics and in other chosen areas of Professional Electronics, through Quality, Technology and Innovation.</p>
                                    <a href="#counter" class="btn btn-circle page-scroll " id="button">
                                        <i class="fa fa-chevron-circle-down  animated fa-3x"></i> </a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div><!-- End Carousel inner -->
        <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div><!-- End Carousel -->
    </div>

</header>


<!-- Start Feature -->
<section id="new" style="background-color: black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area">
                    <h2 class="title" style="font-family: 'Century Gothic';font-weight: 900">
                        <br><br><br><br>WHAT'S NEW</h2>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-content">
                    <div class="row" >
                        <div class="container">
                            <div class="col-lg-8 col-lg-offset-2">
                                <a href="" class="btn btn-default btn-lg">new info:</a>
                                <br>
                                <p> <span class="label label-default">New</span>&nbsp;KYC&nbsp; ( KNOW YOUR COMPUTER )</p>
                                <p> <span class="label label-default">New</span>&nbsp;MAKE IN INDIA</p>
                                <p> <span class="label label-default">New</span>&nbsp;ESS MODULE</p>
                                <br><br><br><br>
                            </div>
                        </div>


                    </div><hr>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feature -->

<!-- Start Feature -->
<section id="ns1" style="background-color: black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area">
                    <h2 class="title" style="font-family: 'Century Gothic';font-weight: 900">
                        <br><br><br><br>NS-1(S & CS)</h2>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-content" id="ns1">
                    <div class="row" >
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-eye fa-4x feature-icon"></i>
                                <h4 class="feat-title">Vision:</h4>
                                <p class="para">Continue to be the domestic market leader with significant global presence in the chosen segments of Naval Electronics and achieve a turn-over of Rs.2000 crores by the 2020.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-cog fa-4x feature-icon"></i>
                                <h4 class="feat-title">Mission:</h4>
                                <p class="para"> To be a customer focused, globally competitive company in Defence Electronics and other chosen segments of Naval Technologies through Quality, Technology and Innovation.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-users fa-4x feature-icon"></i>
                                <h4 class="feat-title ">Values:</h4>
                                <p>
                                <ul style="color:darkgrey">
                                    <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Putting customers first.</span></li>
                                    <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Working with transparency, honesty and &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;integrity.</span> </li>
                                    <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Trusting and respecting individuals.</span></li>
                                    <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Fostering teamwork.</span></li>
                                    <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Striving to achieve high employee &ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;satisfaction.</span> </li>
                                    <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Encouraging flexibility and innovation.</span></li>
                                    <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Endeavoring to fulfill social responsibilities.</span> </li>
                                    <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Proud of being a part of the organisation.</span></li></ul></p>  </div>
                        </div>
                    </div><hr>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feature -->


<!-- Start Feature -->
<section id="ns2" style="background-color: black">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-area">
                    <h2 class="title" style="font-family: 'Century Gothic';font-weight: 900">
                        <br><br><br><br>NS-2(R & FCS)</h2><br>
                    <span class="line"></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="feature-content" id="ns2">
                    <div class="row" >
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-eye fa-4x feature-icon"></i>
                                <h4 class="feat-title">Vision:</h4>
                                <p class="para">Continue to be leader in domestic market with global presence, in the chosen segments of Naval and other Professional Electronics and achieve a turn-over of Rs.1800 crores by the 2020.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-cog fa-4x feature-icon"></i>
                                <h4 class="feat-title">Mission:</h4>
                                <p class="para">  To be a customer focused, globally competitive company in Defence Electronics and in other chosen areas of Professional Electronics, through Quality, Technology and Innovation.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-feature wow zoomIn">
                                <i class="fa fa-users fa-4x feature-icon"></i>
                                <h4 class="feat-title ">Values:</h4>
                                <p><ul style="color:darkgrey ">
                                <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Putting customers first.</span></li>
                                <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Working with transparency, honesty and &ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;&ensp;&ensp;integrity.</span> </li>
                                <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Trusting and respecting individuals.</span></li>
                                <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Fostering teamwork.</span></li>
                                <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Striving to achieve high employee &ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;&nbsp;&nbsp;&ensp;&ensp;&ensp;&ensp;satisfaction.</span> </li>
                                <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Encouraging flexibility and innovation.</span></li>
                                <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Endeavoring to fulfill social responsibilities.</span> </li>
                                <li class="fa fa-check-square-o">&ensp; &ensp;<span id="val">&nbsp;&nbsp;Proud of being a part of the organisation.</span></li></ul></p>  </div>
                        </div>
                    </div><hr>
                </div><hr>
            </div><hr><br><br><br><br>
        </div>
    </div><br><br><br><br>
</section>
<!-- End Feature -->
<!-- Start counter -->
<section id="counter">
    <div class="counter-overlay">
        <br><br><br><br><br>
        <section class="buttons" id="btn">
            <div class="container" id="cntnr">
                <a href="login/userindex.php" class="btn btn-5" id="myBtn"><i class="fa fa-group fa-fw"></i> USER LOGIN</a>
            </div>
            <div class="container" id="cntnr">
                <a href="login/index.php" class="btn btn-5" ><i class="fa fa-user fa-fw"></i> ADMIN LOGIN</a>
            </div>
        </section><br><br><br>
    </div>
    <style>
        #btn {
            display: table;
            height: 100%;
            width: 100%;
        }

        #cntnr {
            display: table-cell;
            padding: 1em;
            text-align: center;
            vertical-align: middle;
        }
        .btn {
            color: lightseagreen;
            cursor: pointer;
            display: block;
            font-size: 25px;
            font-weight: 800;
            line-height: 45px;
            margin: 0 auto 2em;
            max-width: 300px;
            position: relative;
            text-decoration: none;
            text-transform: uppercase;
            vertical-align: middle;
            width: 100%;
        }

        .btn:hover {
            text-decoration: none;
        }

        .btn-5 {
            border: 4px solid;
            box-shadow: inset 0 0 20px white;
            outline: 0px solid;
            outline-color: white;
            outline-offset: 0px;
            text-shadow: none;
            -webkit-transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
            transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
        }

        .btn-5:hover {
            border: 1px solid;
            box-shadow: inset 0 0 20px white, 0 0 20px white;
            outline-color: rgba(255, 255, 255, 0);
            outline-offset: 10px;
            text-shadow: 1px 1px 2px white;
        }

    </style>
</section>
<!-- End counter -->

<!-- Start Pricing table -->
<section id="pricing-table" style="background-color: black" >
    <div class="container">
        <br><br>

        <h1 style="color: lightseagreen;font-weight:700" align="center">DEPARTMENT STRUCTURE</h1><hr style="color: lightseagreen"><br>
<div align="center" class="pic">
    <a href="tree/index.php"><div class="text" ><h4 align="center">click here to see..</h4></div></a>
</div>

       <style type="text/css">
               .pic{
                   background: url("Capture.PNG") no-repeat;
                   width:700px;
                   height:200px;
                   background-size: 100% 100%;
                   margin:auto;
               }
               .text{

                   width:800px;
                   height:200px;
                   background:black;
                   opacity:0;
                   vertical-align: 500px;
               }
               .pic:hover .text {
                   opacity:0.6;
                   text-align:justify;
                   color:white;
                   font-size:20px;
                   font-weight:700;
                   font-family:"Times New Roman", Times, serif;
                   padding:30px;
               }
       </style>

        <br><br></div>

        <br><br><br><br><br>
<br>
        <hr>

        <div><h3 style="color:grey;" align="center">नौसेना तंत्र (एस व सी एस), भारत इलेक्ट्रॉनिक्स लिमिटेड,<br>
                  जालहल्ली पोस्ट, बेंगलूरु – 560 013<br>
                    NAVAL SYSTEMS (S & CS) - BHARAT ELECTRONICS LIMITED, BANGALORE POST – 560 013<br>
                    दूरभाष संख्या / TELEPHONE NO. 080-22195929</h3></div>
</section>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/grayscale.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.js"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<!-- counter -->
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/jquery.counterup.js"></script>
<!-- Wow animation -->
<script type="text/javascript" src="assets/js/wow.js"></script>
<!-- progress bar   -->
<script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>


<!-- Custom js -->
<script type="text/javascript" src="assets/js/custom.js"></script>

</body>

</html>
