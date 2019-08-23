<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>مستخدم جديد</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
    <style>
    * {
  margin: 0;
  padding: 0;
}

body {
  background: #2E3740;
  color: #435160;
  font-family: "Open Sans", sans-serif;
}

h2 {
  color: #6D7781;
  font-family: "Sofia", cursive;
  font-size: 15px;
  font-weight: bold;
  font-size: 3.6em;
  text-align: center;
  margin-bottom: 20px;
}

a {
  color: #435160;
  text-decoration: none;
}

.login {
  width: 350px;
  position: absolute;
  top: 10%;
  left: 50%;
  margin-left: -175px;
}

input[type="text"], input[type="password"] {
  width: 350px;
  padding: 20px 0px;
  background: transparent;
  border: 0;
  border-bottom: 1px solid #435160;
  outline: none;
  color: #6D7781;
  font-size: 16px;
}
input[type=checkbox] {
  display: none;
}

label {
  display: block;
  position: absolute;
  margin-right: 10px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: transparent;
  content: "";
  transition: all 0.3s ease-in-out;
  cursor: pointer;
  border: 3px solid #435160;
}

#agree:checked ~ label[for=agree] {
  background: #435160;
}

input[type="submit"] {
  background: #1FCE6D;
  border: 0;
  width: 350px;
  height: 40px;
  border-radius: 3px;
  color: #fff;
  font-size: 12px;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
input[type="submit"]:hover {
  background: #16aa56;
  animation-name: shake;
}

.forgot {
  margin-top: 30px;
  display: block;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
}
.forgot:hover {
  margin-top: 30px;
  display: block;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
  color: #6D7781;
}

.agree {
  padding: 30px 0px;
  font-size: 12px;
  text-indent: 25px;
  line-height: 15px;
}

::-webkit-input-placeholder {
  color: #435160;
  font-size: 12px;
}

.animated {
  animation-fill-mode: both;
  animation-duration: 1s;
}

@keyframes shake {
  0%, 100% {
    transform: translateX(0);
  }
  10%, 30%, 50%, 70%, 90% {
    transform: translateX(-10px);
  }
  20%, 40%, 60%, 80% {
    transform: translateX(10px);
  }
}



* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  height: 100%;
  font-family: 'Georgia', sans-serif;
  color: #f4f4f4;
  text-align: center;
}

h1 {
  font-size: 4.5rem;
  font-weight: 300;
}

h2 {
  font-size: 2.5rem;
  font-weight: 300;
  padding: 60px 0;
  background: #fff;
  color: #333;
}

h2:after {
  content: "";
  width: 20%;
  display: block;
  margin: 0 auto;
  padding-top: 20px;
  border-bottom: 3px solid #2193b0;
}

img {
  width: 100%;
}

/********* HEADER *********/

nav {
  display: flex;
  width: 100%;
  background: #2193b0;  /* fallback for old browsers */
  background: linear-gradient(to right, #6dd5ed, #2193b0);
  position: fixed;
  z-index: 10;
 
}

nav ul {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  flex-wrap: wrap;
  height: 4rem;
  width: 100%;
  margin-right: 30px;
}

nav a {
  text-decoration: none;
  margin-right: 50px;
  font-size: 1.3rem;
  color: #fff;
  list-style: none;
  border-top: 2px solid transparent;
}

nav a:last-child {
  margin-right: 0;
}

a:link,
a:visited {
  text-decoration: none;
  outline: none;
}

nav a:hover {
  border-bottom: 2px solid #fff;
  transition: all .2s;
}

.fas {
  width: 100%;
  margin: 20px 40px 10px 0;
  display: none;
  text-align: right;
}

/********* WELCOME PAGE *********/
#welcome-section {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  width: 100%;
 
}

#welcome-section p {
  font-size: 1.5rem;
}

/********* PROJECTS *********/
.grid {
  display: grid;
  align-items: center;
  grid-row-gap: 20px;
  grid-column-gap: 5rem;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  padding: 90px 20px;
}

.grid img {
  border-radius: 5px;
}

img:hover {
  transform: scale(1.05);
  transition: all .3s;
}

/********* CONTACT *********/
.fab {
  margin: 30px 20px 0 0;
  color: #333;
}

.fab:hover {
  color: #2193b0;
  transform: scale(1.04);
  transition: all .2s
}

.fa-github {
  padding-right: 50px;
}

/********* FOOTER *********/
footer {
  margin-top: 50px;
  background: #2193b0;  /* fallback for old browsers */
  background: linear-gradient(to right, #6dd5ed, #2193b0);
  color: #333;
  padding: 15px;
}

/********* QUERIES *********/
@media screen and (max-width: 275px) {
  .fa-github {
    padding-right: 0;
  }
}

@media screen and (max-width: 560px) {
  nav ul {
    display: none;
  }
  
  .fas {
    display: block;
  } 
  
  h1 {
    font-size: 2.5rem;
  }
  
  h2 {
    font-size: 1.9rem;
  }
}






    </style>
</head>
<body>
<header>
  <nav>
    <ul>
      <a href="/"><li>الرئيسيه</li></a>
     
    </ul>
    <i class="fas fa-bars fa-2x"></i>
  </nav>
</header>

<main>
  <section id="welcome-section">
    <div>
      <h1>اهلا {{$name}}</h1>
      <p>برجاء التوجه الي اقرب فرع لأم دكز لاستكمال بياناتك و اعتمادك كعميل </p>
    </div>
  </section>

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
