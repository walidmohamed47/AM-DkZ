<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8" />

	<link rel="icon" type="image/png" href="img/favicon.ico">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />



	<title>amdkz wallet</title>



	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <meta name="viewport" content="width=device-width" />





    <!-- Bootstrap core CSS     -->

    <link href="css/bootstrap.min.css" rel="stylesheet" />



    <!-- Animation library for notifications   -->

    <link href="css/animate.min.css" rel="stylesheet"/>



    <!--  Light Bootstrap Table core CSS    -->

    <link href="css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>





    <!--  CSS for Demo Purpose, don't include it in your project     -->

    <link href="css/demo.css" rel="stylesheet" />





    <!--     Fonts and icons     -->

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="img/sidebar-5.jpg">
        <!--

    

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"

            Tip 2: you can also add an image using data-image tag
        -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        AMDKZ WALLET
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a href="transferTimeCloser">
                            <i class="pe-7s-graph"></i>
                            <p>مشاهده العمليات</p>
                        </a>
                    </li>
                    <li>
                        <a href="reportTimeCloser">
                            <i class="pe-7s-graph"></i>
                            <p>التقارير</p>
                        </a>
                    </li>
                </ul>
            </div>    
        </div>

    

        <div class="main-panel">

            <nav class="navbar navbar-default navbar-fixed">

                <div class="container-fluid">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">

                            <span class="sr-only">Toggle navigation</span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                        <a class="navbar-brand" href="#">بيانات الموظف</a>

                    </div>

                    <div class="collapse navbar-collapse">

                        <ul class="nav navbar-nav navbar-left">

                            <li>

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <p class="hidden-lg hidden-md">بيانات الموظف</p>

                                </a>

                            </li>

                          

                        </ul>

    

                        <ul class="nav navbar-nav navbar-right">

                            <li>

                               <a href="../logout">

                                    <p>الخروج</p>

                                </a>

                            </li>

                            <li class="separator hidden-lg"></li>

                        </ul>

                    </div>

                </div>

            </nav>



        <div class="content">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-8">

                        <div class="card">

                            <div class="header">

                                <h4 class="title"></h4>

                            </div>

                            <div class="content">

                                <form class="form-horizontal" role="form" name="form"action="/transferResultTimeCloser" method="POST" enctype="multipart/form-data">

                                    {{csrf_field()}}

                                    <div class="row">

                                        <div class="col-md-5">

                                            <div class="form-group">

                                                <label>من</label>

                                                <input type="date" class="form-control" name="from" required>

                                            </div>

                                        </div>

                                    </div>

                                     <div class="row">

                                        <div class="col-md-5">

                                            <div class="form-group">

                                                <label>الي</label>

                                                <input type="date" class="form-control" name="to" required>

                                            </div>

                                        </div>

                                    </div>

                                    

                                    

                                    <div class="row">

                                        <div class="col-md-5">

                                            <div class="form-group">

                                                <label>الموظف</label>

                                                <select class="form-control" name="employeeID">

                                                    @foreach($employees as $e)

                                                        <option value="{{ $e->id }}">

                                                            {{ $e->name }}

                                                        </option>

                                                    @endforeach

                                                </select>

                                            </div>

                                        </div>

                                    </div>



                                    <button type="submit" class="btn btn-info btn-fill pull-right">مشاهده العمليات</button>

                                    <div class="clearfix"></div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

 </div>

</div>





</body>



    <!--   Core JS Files   -->

    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>

	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>



	<!--  Charts Plugin -->

	<script src="assets/js/chartist.min.js"></script>



    <!--  Notifications Plugin    -->

    <script src="assets/js/bootstrap-notify.js"></script>



    <!--  Google Maps Plugin    -->

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>



    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->

	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>



	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->

	<script src="assets/js/demo.js"></script>



</html>

