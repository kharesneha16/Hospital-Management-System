<!DOCTYPE html>
<html lang="en">
<head>
  	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

<style type="text/css">
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 400px;
}
.header a {
  /* float: right; */
  color: black;
  text-align: right;
  padding: 10px;
  text-decoration: none;
  font-size: 20px;
  border-radius: 10px;
}

/* .header a.logo {
  font-size: 70px;
  font-weight: bold;
  text-align: right;
  float: right;
  padding-left: 10px;
} */
.header a:hover {
  background-color: #ddd;
  color: black;
}
.topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    padding:20px 300px;
  }
  .dropdown {
  float: left;
  overflow: hidden;
}
.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.topnav a:hover, .dropdown:hover {
  background-color: #555;
  color: white;
}
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}
.topnav .icon {
  display: none;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
/*@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: right;
  }
  .header-right {
    float: none;
  }
}*/
.sidebar {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:rgb(100,0,50);
  overflow-x: hidden;
  padding-top: 16px;
}
.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
}
.sidebar a:hover {
  color: #f1f1f1;
}
.main {
  margin-left: 260px; 
  padding: 0px 10px;
}
/*@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}*/
.footer {
  background:#f1f1f1;
  color:black;
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align: center;
  margin-left: 260px; 
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
</head>
<body>
<div class="header" style="width:100%">
  <br>
    <div class="logo">
    <img src="<?php echo base_url();?>public/hospital_logo.png" style="width:100px; alignment:left;"></img>
    <a href="#default">S.K. Hospital</a>
    </div>
    <br>
  <div class="topnav" id="myTopnav">
    <a href="#home">Home</a>
    <a href="#services" class="dropdown">Services</a>
    <a href="#contact us">Contact Us</a>
    <a href="#about us">About Us</a>
    <a href="#book appointment">Book appointment</a>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
</div> 
<div class="sidebar">
<a class="active" href="#home">Home</a>
  <a href="#book appointment">Book appointment</a>
  <a href="#contact us">Contact Us</a>
  <a href="#about us">About Us</a>
</div>   
</body>
<div class="footer" style="width:100%">
  <h2>hello</h2>
</div>
</html>



<!-------------------------------------------------------------------------->
<!-- <div class="parent">
  <div class="child">Header</div>
  <div class="main">
    <div class="child">Sidebar</div>
    <div class="child content">Content</div>  
  </div>
  <div class="child">Footer</div>
</div> -->

<!-- <style>
  .parent {
  display: flex;
  flex-direction: column;
  height: 100vh;
}

.main {
  display: flex;
  flex-grow: 1;
}

.content {
  flex-grow: 1;
}
  
/* --------- Non-flexbox related styles --------- */
.child {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 1%;
  padding: 20px;
  font-size: 20px;
  line-height: 20px;
  color: #ffe8c3;
  background-color: #eab768;
  border-radius: 10px;
  border: 10px solid #f5cc8b;
}

body {
  background-color: #282c35;
  font-family: Verdana;
  font-weight: 600;
}

  </style> -->

<!-------------------------------------------------------------------------->
