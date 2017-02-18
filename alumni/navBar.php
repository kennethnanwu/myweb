<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
.more_info{
  text-decoration: underline;
  cursor: pointer;
}
</style>

<body>
<!-- Navbar -->
<div class="w3-top">
<ul class="w3-navbar w3-black w3-card-2 w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large" onclick="toggleNavigationMenu()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#" class="w3-hover-none w3-hover-text-grey w3-padding-large" onclick="closeNavBar()">HOME</a></li>
  <li class="w3-hide-small"><a href="#club" class="w3-padding-large">CLUB</a></li>
  <li class="w3-hide-small"><a href="#events" class="w3-padding-large">EVENTS</a></li>
  <li class="w3-hide-small"><a href="#contact" class="w3-padding-large">CONTACT</a></li>
  <li class="w3-hide-small w3-dropdown-hover">
    <a class="w3-hover-none w3-padding-large" title="More">MORE <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="#" class="w3-hover-red">To</a>
      <a href="#" class="w3-hover-red">Be</a>
      <a href="#" class="w3-hover-red">Determined</a>
    </div>
  </li>
  <li class="w3-hide-small w3-right"><a href="javascript:void(0)" class="w3-padding-large w3-hover-red"><i class="fa fa-search"></i></a></li>
</ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <ul class="w3-navbar w3-left-align w3-black">
    <li><a class="w3-padding-large" href="#club" onclick="closeNavBar()">CLUB</a></li>
    <li><a class="w3-padding-large" href="#events" onclick="closeNavBar()">EVENTS</a></li>
    <li><a class="w3-padding-large" href="#contact" onclick="closeNavBar()">CONTACT</a></li>
  </ul>
</div>