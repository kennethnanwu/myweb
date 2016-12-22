<?php
include("testDbConnection/dbConn.php");
?>
<html>
<title>ACE (Alumnus of Chinese Engineers)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
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

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="img/Logo.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">  
    </div>
  </div>

  <!-- The Club Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="club">
    <h2 class="w3-wide">THE CLUB</h2>
    <p class="w3-opacity"><i>some quotes here</i></p>
    <p class="w3-justify">Alumni of Chinese Engineers (ACE) is a professional cultural organization consists of Engineering graduates from University of Toronto. The goal for ACE is to connect Chinese Engineering graduates to a larger network, pursue opportunities, and eventually make an impact.<br>
    <b>Join us</b> by filling up <a href="https://docs.google.com/forms/d/e/1FAIpQLSckmMOa6nQxxbG3nQ8WQ1Be8uUYW_Jjq_w5DxjjxquvWhQKpQ/viewform?c=0&w=1" target="_blank">this form</a>
    </p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>name</p>
        <img src="img/Logo.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <!-- The Event Section -->
  <div class="w3-black" id="events">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">EVENT DATES</h2>
      <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
        <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right"><?php echo count($result);?></span></li>
      </ul>
      <!-- Ongoing Events -->
        <?php
        while($row = $result->fetch_assoc()) {
        ?>
        <div class="w3-third w3-margin-bottom">
          <img src="img/Logo.png" alt="San Francisco" style="width:100%" class="w3-hover-opacity"  onclick="document.getElementById('eventDetailModal').style.display='block'">
          <div class="w3-container w3-white">
            <p><b><?php echo $row["name"];?></b></p>
            <p class="w3-opacity"><?php echo $row["date"];?></p>
            <p class="w3-opacity"><?php echo $row["address"];?></p>
            <p><?php echo $row["description"];?></p>
            <button class="w3-btn w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Event details -->
  <div id="eventDetailModal" class="w3-modal" onclick="this.style.display='none'">
  	<div class="w3-modal-content w3-animate-bottom w3-card-8">
  		<header class="w3-container w3-teal w3-center w3-padding-32 w3-white"> 
        <span onclick="document.getElementById('eventDetailModal').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright w3-hover-red">×</span>
        <h2 class="w3-wide">Event Title</h2>
      </header>
      <div class="w3-container">
      	<p>details<br>
      	details<br>
      	details
      	</p>
      </div>
  	</div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-bottom w3-card-8">
      <header class="w3-container w3-teal w3-center w3-padding-32 w3-white"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-closebtn w3-padding-xlarge w3-xxlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-envelope"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-btn-block w3-teal w3-padding-12 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-btn w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Reach out to us!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i>Toronto, Canada<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +1 647-669-5699<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: <a href="mailto:acengineer.info@gmail.com">acengineer.info@gmail.com</a><br>
      </div>
      <div class="w3-col m6">
        <form action="form.asp" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-btn w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
  <i class="fa fa-linkedin w3-hover-text-indigo"></i>
  <p class="w3-medium">Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleNavigationMenu() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Close when the user clicks anywhere outside the menu on small screens
function closeNavBar() {
	var smallMenu = document.getElementById("navDemo");
	if (smallMenu.className.indexOf("w3-show") !== -1) {
		smallMenu.className = smallMenu.className.replace(" w3-show", "");
	}
}

// Close when the user clicks anywhere outside the menu on small screens
var smallMenu = document.getElementById('navDemo');

</script>

</body>
</html>

