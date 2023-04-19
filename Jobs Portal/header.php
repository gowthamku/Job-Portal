



<!DOCTYPE html>
<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset ="UTF-8">
    <meta http-equiv="x-UA-compatible" content="IE=edge">
   
    <meta name ="viewport" content="width=device-width,intial-scale= 1.0">
    <link href="style\style.css">
    <!-- css bootstramp -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <tile>Register</title>
    <style>
        /* The side navigation menu */
.sidebar {
  margin: 0;
  margin-top: 36px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 30px 20px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

 /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
  @media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.navbar{
    overflow:hidden;
    background-color:#333;
    position:fixed;
    top:0;
    width:100%;
}
.form-control2{
  height:300px;
  width:1000px;
 }
    </style>
</head>
<body> 
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="   position: fixed; "> 
  <a class="navbar-brand" href="#">Admin Dashboard</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    
  </div>
</nav>
<div class="sidebar">
  <a class="active" href="#home">Jobs</a>
  <a href="#jobs.php">Candiate Applied</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a> 
 </div>  
