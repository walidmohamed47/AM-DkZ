<!doctype html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AM DKZ WALET</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../css/pe-icon-7-stroke.css" rel="stylesheet" />

    <style>
    .card-list {
  width: 100%;
}
.card-list:before, .card-list:after {
  content: " ";
  display: table;
}
.card-list:after {
  clear: both;
}

.card {
  border-radius: 8px;
  color: white;
  padding: 10px;
  position: relative;
}
.card .zmdi {
  color: white;
  font-size: 28px;
  opacity: 0.3;
  position: absolute;
  right: 13px;
  top: 13px;
}
.card .stat {
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  font-size: 8px;
  margin-top: 25px;
  padding: 10px 10px 0;
  text-transform: uppercase;
}
.card .title {
  display: inline-block;
  font-size: 8px;
  padding: 10px 10px 0;
  text-transform: uppercase;
}
.card .value {
  font-size: 28px;
  padding: 0 10px;
}
.card.blue {
  background-color: #2298F1;
  margin: 20px;
}
.card.green {
  background-color: #66B92E;
  margin: 20px;

}
.card.orange {
  background-color: #DA932C;
  margin: 20px;

}
.card.red {
  background-color: #D65B4A;
}

.projects {
  background-color: #273142;
  border: 1px solid #313D4F;
  overflow-x: auto;
  width: 100%;
}
.projects-inner {
  border-radius: 4px;
}

.projects-header {
  color: white;
  padding: 22px;
}
.projects-header .count,
.projects-header .title {
  display: inline-block;
}
.projects-header .count {
  color: #738297;
}
.projects-header .zmdi {
  cursor: pointer;
  float: right;
  font-size: 16px;
  margin: 5px 0;
}
.projects-header .title {
  font-size: 21px;
}
.projects-header .title + .count {
  margin-left: 5px;
}

.projects-table {
  background: #273142;
  width: 100%;
}
.projects-table td,
.projects-table th {
  color: white;
  padding: 10px 22px;
  vertical-align: middle;
}
.projects-table td p {
  font-size: 12px;
}
.projects-table td p:last-of-type {
  color: #738297;
  font-size: 11px;
}
.projects-table th {
  background-color: #313D4F;
}
.projects-table tr:hover {
  background-color: #303d52;
}
.projects-table tr:not(:last-of-type) {
  border-bottom: 1px solid #313D4F;
}
.projects-table .member figure,
.projects-table .member .member-info {
  display: inline-block;
  vertical-align: top;
}
.projects-table .member figure + .member-info {
  margin-left: 7px;
}
.projects-table .member img {
  border-radius: 50%;
  height: 32px;
  width: 32px;
}
.projects-table .status > form {
  float: right;
}
.projects-table .status-text {
  display: inline-block;
  font-size: 12px;
  margin: 11px 0;
  padding-left: 20px;
  position: relative;
}
.projects-table .status-text:before {
  border: 3px solid;
  border-radius: 50%;
  content: "";
  height: 14px;
  left: 0;
  position: absolute;
  top: 1px;
  width: 14px;
}
.projects-table .status-text.status-blue:before {
  border-color: #1C93ED;
}
.projects-table .status-text.status-green:before {
  border-color: #66B92E;
}
.projects-table .status-text.status-orange:before {
  border-color: #DA932C;
}
.projects-table .status-text.status-red:before {
  border-color: #D65B4A;
}


    </style>
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
                <a href="/dashbord/{{$_SESSION['id']}}" class="simple-text">
                    AM DKZ WALET
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/dashbord/{{$_SESSION['id']}}">
                        <i class="pe-7s-graph"></i>
                        <p>الرئيسية</p>
                    </a>
                </li>
                <li>
                    <a href="../transefer/{{$_SESSION['id']}}">
                        <i class="pe-7s-user"></i>
                        <p>تحويل الرصيد</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/reportCustomer/{{$_SESSION['id']}}">
                        <i class="pe-7s-note2"></i>
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
                    <a class="navbar-brand" href="#">الرئيسية</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">الرئيسية</p>
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
        <!--<div class="card-list">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card blue text-center">
                        <h5>الرصيد المتاح</h5>
                        <i class="zmdi zmdi-upload"></i>
                        <div class="value">@if($user->walet == NULL) 0 @else {{$user->walet}}@endif جنية</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card green text-center">
                        <h5>تم تحويلة اليوم</h5>
                        <i class="zmdi zmdi-upload"></i>
                        @php($total = 0)
                        <div class="value">
                          @foreach($transfers as $transfer) 
                              @php($total += $transfer->money)
                          @endforeach
                          {{$total}}جنية
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="card orange text-center">
                        <h5>عدد العمليات التي تمت اليوم</h5>
                        <i class="zmdi zmdi-download"></i>
                        <div class="value">{{sizeof($transfers)}}عملية</div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="projects mb-4">
            <div class="projects-inner">
                <header class="projects-header">
                        
                        <i class="zmdi zmdi-download"></i>
                    <div class="title">اخير العمليات التي تم اجراؤها</div>
                   
                </header>
                <table class="projects-table">
                    <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>المبلغ</th>
                            <th>الحالة</th>
                            <th>التاريخ</th>
                        </tr>


                    </thead>
                    <tbody>
            
                      @foreach($transfers as $transfer)
                        <tr>
                            <td>
                                {{$transfer->phone}}
                            </td>
                            <td>
                                {{$transfer->money}}
                            </td>
                            @if($transfer->type == 1)
                              <td>
                                  جاري التحول
                              </td>
                            @elseif($transfer->type == 2)                              
                              
                               <td>
                                تم التحويل
                              </td>
                            @else
                              <td>
                                  لم يصل التحويل
                              </td>
                               @endif
                              <td>
                                {{$transfer->created_at}}
                            </td>
                           

                        </tr>
                      @endforeach

                </tbody>
                   
                </table>
            </div>
        </div>
       

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>


</html>
