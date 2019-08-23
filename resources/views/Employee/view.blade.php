<!doctype html>
<html lang="en" dir="right" style="text-align:right">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AM DKZ ADMIN</title>

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
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<style>

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}
.linkEdit{
    color: #fff;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
input[type=text], select, textarea {
    width: 500px !important;
}
body{
text-align:right;

}
table th,td{
text-align:right;
}
</style>

</head>
<body dir="rtl" style="">

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

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
                    <a href="employeeTransfer">
                        <i class="pe-7s-graph"></i>
                        <p>طلبات التحويل</p>
                    </a>
                </li>
                <li>
                    <a href="displayCustomers">
                        <i class="pe-7s-user"></i>
                        <p>قائمة العملاء</p>
                    </a>
                </li>
                <li>
                    <a href="createCustomer">
                        <i class="pe-7s-add-user"></i>
                        <p>اعتماد عميل جديد</p>
                    </a>
                </li>
                <!--<li>
                    <a href="adminTransfer">
                        <i class="pe-7s-display2"></i>
                        <p>اخير العمليات التي تم تحويلها</p>
                    </a>
                </li>-->
                <li>
                    <a href="displayEmployees">
                        <i class="pe-7s-user"></i>
                        <p>قائمه الموظافين</p>
                    </a>
                </li>
                <li>
                    <a href="createEmployee">
                        <i class="pe-7s-add-user"></i>
                        <p>اعتماد موظف جديد</p>
                    </a>
                </li>
                <li>
                    <a href="adminReport">
                        <i class="pe-7s-add-user"></i>
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
        <section>
            <!--for demo wrap-->
            <h1>قائمة الموظافين الحاليين</h1>
            <div class="tbl-header">
              <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                  <tr>
                    <th>اسم المستخدم</th>
                    <th>رقم المستخدم</th>
                    <th>الرقم القومي</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
              </table>
            </div>

            <div class="tbl-content">
              <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                  <div class="Customer">
                    @foreach($customers as $customer)
                    <tr>
                        <td>
                            {{$customer->name}}
                        </td>
                        <td>
                            {{$customer->phone}}
                        </td>
                        <td>
                            {{$customer->NationalID}}
                        </td>
                        <td>
                            <a class= "linkEdit" href="../editCustomer/{{$customer->id}}">تعديل</a>
                        </td>
                        <td>
                            <a class= "linkEdit"href="../destroyCustomer/{{$customer->id}}">حذف</a>
                        </td>
                    </tr>
                @endforeach
            </div>
                 
                </tbody>
              </table>
            </div>
          </section>
          
          
          <!-- follow me template -->
         

</div>
</div>

</body>
 <!-- Modal -->
 
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
    
    <script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script>



</html>
