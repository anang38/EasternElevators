    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Eastern Elevators</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Goudy+Bookletter+1911|Offside" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <style>
  .navbar-inverse 
  {
    background-color:rgba(0, 155, 178, 0.85);
    border-color: pink;
	color:white;
}
.nav li
{
    padding:15px;
    font-size:20px;
}
.dropdown-menu li
{
    padding:0px;
    font-size:20px;
}
.navbar-inverse .navbar-nav li a
{
    color: white;
}
.navbar-inverse .navbar-nav li ul li a:hover
{
    background: rgba(0, 155, 178, 0.85);
}
.dropdown-menu{
    background-color:black;
    
}
.dropdown-menu li:hover
{
    background: gray;
}
.navbar-brand 
{
    padding: 9px 30px;
}
.navbar
{
    margin-bottom: 0px;
}
  </style>
</head>
<body style="background-color:#FFF8DC;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="#"><img class="img-responsive" src="image/logo.png" style="width:70%; height: auto;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php">HOME</a></li>
        <li><a href="aboutus.php">COMPANY</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICES<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="solution_for_new_building.php">SOLUTION FOR NEW BUILDING</a></li>
              <li><a href="solution_for_existing_building.php">SOLUTION FOR EXISTING BUILDING</a></li>
          </ul>
        </li>
        <li><a href="products.php">PRODUCT</a></li>
        
        <li><a href="contacts.php">CONTACT</a></li>
      </ul>
      
    </div>
  </div>
</nav>
